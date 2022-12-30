<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        

        return view('client.contacto');
    }

    public function store(Request $request)
    {   
        
        $request->validate([

            'nombre' => 'required',
            'correo' => 'required|email',
            'telefono' => 'required',
            'message' => 'required',

        ]);

        return view('client.contacto');
    }
}
