<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    //
    public function create(){
       $service =  Service::get();
       return view('teams.create',compact('service'));
    }
}
