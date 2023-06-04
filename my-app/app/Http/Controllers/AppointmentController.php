<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function create(){
        return view('appointments.create');
    }
    public function index(){
        $user = auth()->user();
        $appointments=$user->procedures;
        dd($user);
        return view('appointments.index');
    }
}
