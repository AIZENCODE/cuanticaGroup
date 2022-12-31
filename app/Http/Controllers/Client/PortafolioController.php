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
}
