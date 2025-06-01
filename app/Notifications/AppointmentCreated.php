<?php
namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class AppointmentCreated extends Notification
{
    use Queueable;

    protected $appointment;

    public function __construct($appointment)
    {
        $this->appointment = $appointment;
    }

    public function via($notifiable)
    {
        return ['mail']; // or ['database', 'mail'] if you want to store in DB
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('New Appointment Scheduled')
            ->line('An appointment has been scheduled.')
            ->line('Date: ' . $this->appointment->date)
            ->line('Slot: ' . $this->appointment->slot)
            ->line('Service: ' . optional($this->appointment->service)->name)
            ->line('Note: ' . $this->appointment->note)
            ->line('Thank you!');
    }

    // Optional: Store notification in DB
    public function toArray($notifiable)
    {
        return [
            'message' => 'An appointment has been scheduled.',
            'appointment_id' => $this->appointment->id,
        ];
    }
}

