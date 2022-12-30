<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Portafolio;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $services = Service::where('status', true)
        ->where('outstanding', true)
        ->orderBy('id', 'desc')
        ->limit(3)
        ->get(); 

        $portafolios = Portafolio::where('status', true)
        ->orderBy('id', 'desc')
        ->limit(6)
        ->get(); 


        //  return $portafolios;
        return view('client.index', compact('services','portafolios'));
    }
}
