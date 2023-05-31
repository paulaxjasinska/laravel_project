<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clinic;

class ClinicController extends Controller
{
    public function index(){
        $clinics = Clinic::all();
        return view('clinics.index',["clinics"=>$clinics]);
    }
}
