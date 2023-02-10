<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Clients;
use App\Models\Tests;

class LabForm_Control extends Controller
{
    public function handle(Request $request){
        $validated=$request->validate(
            [
                'purpose'=>'required',
                'name'=>'string',
                'age'=>'numeric',
                'birthdate' => 'required',
                'address' => 'required',
                'gender' => 'required'
            ],
            [
                'purpose.required'=>'Choose at Least one in the Purpose Field',
                'name.string'=>'Invalid Name Format',
                'age.numeric'=>'Invalid Age Format',
                'birthdate.required'=>'Birthdate must be Valid',
                'address.required'=>'Address must be Valid',
                'gender.required'=>'Gender must be Valid',
            ]
        );
        Log::info($validated);
        $client=new Clients();
        $client->name=$request->name;
        $client->address=$request->address;
        $client->age=$request->age;
        $client->birthdate=$request->birthdate;
        $client->gender=$request->gender;
        $client->save();

        $services=$request->purpose;
        foreach($services as $service){
            $tests=new Tests();
            $tests->ClientId=$client->getKey();
            $tests->status="";
            $tests->Service=$service;
            $tests->date=date('Y-m-d');
            $tests->save();
        }
        return redirect('/');

    }
}
