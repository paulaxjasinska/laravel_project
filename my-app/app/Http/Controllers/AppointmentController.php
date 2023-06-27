<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Procedure;
use App\Models\Customer;
use Laracasts\Flash\Flash;

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
            $customer->status = "pending";
            $customer->save();
            Flash::success('Appointment was created');
            return redirect('/appointments');
    }

    public function index(){
        $user = auth()->user();
        $procedures = $user->clinic->procedures;

        return view('appointments.index',['procedures'=>$procedures]);
    }
    public function update(Customer $customer){
        $customer->status = "accepted";
        $customer->update();
        return redirect("/visits");
    }
    public function destroy(Customer $customer){
        $customer->delete();
        return redirect("/visits");
    }
}
