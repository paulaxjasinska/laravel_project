<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
use Illuminate\Support\Facades\Auth;

class ClinicController extends Controller
{
    public function index(){
        $clinics = Clinic::all();
        $clinic = null;
        if(Auth::user()){
            $clinic = Auth::user()->clinic;
        }
        return view('clinics.index',["clinics"=>$clinics, "clinic"=>$clinic]);
    }
}
