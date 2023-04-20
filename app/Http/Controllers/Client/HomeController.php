<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Approach;
use App\Models\Client;
use App\Models\Portafolio;
use App\Models\Score;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {



     

        $approaches = Approach::all(); 

        $clients = Client::all();

        $services = Service::where('status', true)
        ->where('outstanding', true)
        ->orderBy('id', 'desc')
        ->limit(3)
        ->get(); 


        $portafolios = Portafolio::where('status', true)
        ->orderBy('id', 'desc')
        ->limit(6)
        ->get(); 

        $scores = Score::where('status', true)
        ->orderBy('id', 'desc')
        ->limit(5)
        ->get(); 

        //   return $clients;
        return view('client.index', compact('services','portafolios','scores','approaches','clients'));
    }
}
