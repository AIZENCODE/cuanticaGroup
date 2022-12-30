<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {

        $groups = Group::where('status', true)
        ->orderBy('id', 'desc')
        ->get(); 

        // return $services;
        

        return view('client.nosotros', compact('groups'));
    }
}
