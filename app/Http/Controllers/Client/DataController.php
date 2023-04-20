<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Enterprise;
use App\Models\Group;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {


        $enterprise = Enterprise::first();

        // return $enterprise;
        $groups = Group::where('status', true)
        ->orderBy('id', 'asc')
        ->get(); 

        // return $services;
        

        return view('client.nosotros', compact('groups','enterprise'));
    }
}
