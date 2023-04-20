<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
 
    public function index()
    {


        return view('client.servicios');
    }



    public function show(Service $post)
    {
        return view('client.services.show', compact('post'));
    }
}
