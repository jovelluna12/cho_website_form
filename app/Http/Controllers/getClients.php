<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Clients;
use App\Models\Tests;

class getClients extends Controller
{
    public function index(Request $request){

        return response()->json(
            [
                'Clients'=>Clients::all(),
                'Tests'=>Tests::all(),
            ]
        );
    }
}
