<?php

namespace App\Http\Controllers;

use App\Models\Procedure;
use Illuminate\Http\Request;

class ProcedureController extends Controller
{
    public function show(Procedure $procedure){
        return view("procedures.show", ["procedure"=>$procedure]);
    }
    public function create(){
        return view("procedures.create");
    }
    public function store(Request $request){
        $formFields = $request->validate([
            'name'=>'required',
            'description'=>'required',
            'price'=>'required',
        ]);
        // Create a new post instance
        $procedure = new Procedure();
        $procedure->name = $formFields['name'];
        $procedure->description = $formFields['description'];
        $procedure->price = $formFields['price'];
        $procedure->clinic_id = auth()->user()->clinic->id;

        $procedure->save();

        return redirect("/clinics");
    }
    public function destroy(Procedure $procedure){
        $procedure->delete();
        return redirect("/clinics");
    }

    public function edit(Procedure $procedure){
        return view("procedures.edit", ["procedure"=>$procedure]);
    }

    public function update(Request $request, Procedure $procedure){

        $formFields = $request->validate([
            'name'=>'required',
            'description'=>'required',
            'price'=>'required',
        ]);
        $procedure->update($formFields);

        return redirect("/clinics");
    }
}
