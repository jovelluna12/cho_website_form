<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Clients;
use App\Models\Tests;
use Illuminate\Support\Facades\DB;
use PHPUnit\Util\Test;

class getClients extends Controller
{
    public function index(Request $request){
        $tests=Tests::all();
        $clients=Clients::all();

        foreach ($tests as $test) {
            $test->delete();
        }
        
        foreach ($clients as $client) {
            $client->delete();
        }

        return response()->json(
            [
                'Clients'=>$tests,
                'Tests'=>$clients,
            ]
        );
    }
}
