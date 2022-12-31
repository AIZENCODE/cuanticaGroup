<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {

        $services = Service::where('status', true)
        ->orderBy('id', 'desc')
        ->paginate(18); 

        // return $services;
        

        return view('client.servicios',compact('services'));
    }

    public function show(Service $post)
    {
        return view('client.services.show', compact('post'));
    }
}
