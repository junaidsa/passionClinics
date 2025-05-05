<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Setting;
use App\Models\StaffBreak;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AppointmentController extends Controller
{
    //
    public function getStaffByService($id){
        $staff = User::where('service_id', $id)->where('role','doctor')->get(); // Adjust based on your relationship
        return response()->json($staff);
    }



    public function availableSlots(Request $request)
    {
        $setting = Setting::find(1);
        $staffId = $request->staff_id;
        $date = $request->date;

        // Validate inputs
        if (!$staffId || !$date) {
            return response()->json(['error' => 'Invalid input'], 400);
        }

        $user = User::findOrFail($staffId);
        if ($user->role !== 'doctor') {
            return response()->json(['error' => 'Invalid staff'], 400);
        }

        // Default values from settings
        $openingTime = $setting->opening_time ?? '09:00';
        $closingTime = $setting->closing_time ?? '17:00';
        $duration = intval($setting->slot_duration ?? 30); // in minutes

        $start = Carbon::parse("$date $openingTime");
        $end = Carbon::parse("$date $closingTime");

        $slots = [];

        // Get booked slots (only start times in "h:i A" format)
        $bookedSlots = Appointment::where('user_id', $staffId)
            ->where('date', $date)
            ->pluck('slot')
            ->toArray();

        // Get breaks for the day
        $breaks = StaffBreak::where('user_id', $staffId)
            ->where('date', $date)
            ->get();

        while ($start->lt($end)) {
            $slotEnd = $start->copy()->addMinutes($duration);
            $slotString = $start->format('h:i A'); // like "12:10 PM"

            // Skip if already booked
            if (in_array($slotString, $bookedSlots)) {
                $start->addMinutes($duration);
                continue;
            }

            // Check for break overlap
            $isBreak = false;
            foreach ($breaks as $break) {
                $breakStart = Carbon::parse("$date " . $break->break_start);
                $breakEnd = Carbon::parse("$date " . $break->break_end);

                if ($start->lt($breakEnd) && $slotEnd->gt($breakStart)) {
                    $isBreak = true;
                    break;
                }
            }

            // If not during break or booked, add to slots
            if (!$isBreak) {
                $slots[] = $slotString;
            }

            $start->addMinutes($duration);
        }

        return response()->json($slots);
    }

    public function store(Request $request){
        try{
            $rules = [
                'location'            => 'required|exists:locations,id',
                'service'             => 'required|exists:services,id',
                'staff'               => 'required|exists:users,id', // Assuming you have a staff table
                'appointment_date'    => 'required|date',
                'slots'               => 'required|string',
                'customer'            => 'required|exists:customers,id',
                'appointment_status'  => 'required',
                'note'    => 'nullable|string|max:1000',
            ];

            $validator = Validator::make($request->all(), $rules);
// dd( $validator);
            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'errors' => $validator->errors(),
                ]);
            }
            $appointment = Appointment::create([
                'location_id'         => $request->location,
                'service_id'         => $request->service,
                'user_id'            => $request->staff,
                'customer_id'        => $request->customer,
                'slot'              => $request->slots,
                'appointment_status' => $request->appointment_status,
                'date' => $request->appointment_date,
                'payment_status' => 'paid',
                'note'               => $request->note,
            ]);
            return response()->json([
                'status' => true,
                'message' => 'Appointment created successfully',
                'appointment' => $appointment,
            ]);


        }catch (\Exception $e) {
    return response()->json(['error' =>  $e->getMessage(),'line'=> $e->getLine(),'File'=> $e->getFile()], 500);
    }
    }

    public function getappointments()
{
    $appointments = Appointment::with(['service', 'customer']) // eager load relationships
        ->select('id', 'appointment_date', 'slots', 'appointment_status', 'customer_id', 'service_id')
        ->get();

    $events = $appointments->map(function ($appointment) {
        return [
            'id' => $appointment->id,
            'title' => $appointment->customer->name . ' - ' . $appointment->service->name,
            'start' => $appointment->appointment_date . 'T' . $appointment->slots, // assumes 'slots' is time
            'status' => $appointment->appointment_status,
        ];
    });

    return response()->json($events);
}


}
