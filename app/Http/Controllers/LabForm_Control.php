<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LabForm_Control extends Controller
{
    public function handle(Request $request){
        Log::info($request->name);
        Log::info($request->age);
        Log::info($request->birthdate);
        Log::info($request->gender);
        Log::info($request->address);

        return redirect('/');

    }
}
