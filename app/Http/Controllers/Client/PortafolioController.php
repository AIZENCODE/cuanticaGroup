<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Portafolio;
use Illuminate\Http\Request;

class PortafolioController extends Controller
{

   

    public function index()
    {


        return view('client.portafolio');
    }

    public function show(Portafolio $portafolio)
    {
        return view('client.services.show', compact('portafolio'));
    }
}
