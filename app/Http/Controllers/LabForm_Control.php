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
                'age'=>'numeric'    
            ]
        );
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
