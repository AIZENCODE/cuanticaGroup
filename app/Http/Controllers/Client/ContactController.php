<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Mail\ContactMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
            'mensaje' => 'required',

        ]);

        // Forma de acerlo con jetstream
        // session()->flash('flash.banner','El correo se envio satisfactoriamente');
        // session()->flash('flash.bannerStyle','success');

        Mail::to('migelo5511@gmail.com')->send(new ContactMailable($request->all()));
        return back()->with('info','El correo se envio satisfactoriamente');
       
    }
}
