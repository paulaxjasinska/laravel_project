<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Procedure;
use App\Models\Customer;

class AppointmentController extends Controller
{
    public function create(){
        $procedures = Procedure::all();
        return view('appointments.create',['procedures'=>$procedures]);
    }
    public function store(Request $request){
        $validData = $request->validate([
            'name'=>'required',
            'last_name'=>'required',
            'email'=>['required', 'email'],
            'phone_number'=>'required',
            'procedure'=>'required',
            ]);
            $procedure = Procedure::where('id',$validData['procedure'])->first();
            $customer = new Customer;
        $customer->name = $validData['name'];
        $customer->last_name = $validData['last_name'];
        $customer->email = $validData['email'];
        $customer->phone_number = $validData['phone_number'];
        $customer->procedure_id = $validData['procedure'];
        $customer->procedure_price = $procedure->price;
        $customer->save();
        return redirect('/appointments');
    }
    public function index(){
        $user = auth()->user();
        $appointments=$user->procedures;
        dd($user);
        return view('appointments.index');
    }
}
