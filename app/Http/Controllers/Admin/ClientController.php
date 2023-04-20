<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ClientController extends Controller
{


    public function __construct()
    {
        $this->middleware('can:admin.clientes.index')->only('index');
        $this->middleware('can:admin.clientes.create')->only('create','store');
        $this->middleware('can:admin.clientes.edit')->only('edit','update');
        $this->middleware('can:admin.clientes.destroy')->only('destroy');
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $clients = Client::all();
        return view('admin.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([

            'name' => 'required|max:60',
            'description' => 'required|max:250',

        ]);

        // return $client;
        $client = Client::create($request->all());

        if ($request->image) {
            $nameFile = Str::slug($request->name) . '.' . $request->image->extension();
            $image_url = $request->image->storeAs('clients', $nameFile);
    
            $client->image_url = $image_url;
        }

        $client->save();

        return redirect()->route('admin.clientes.edit', $client)->with('info','Se creo satisfactoriamente un cliente')->with('tipo','success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $cliente)
    {
        return view('admin.clients.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $cliente)
    {
        $request->validate([

            'name' => 'required|max:60',
            'description' => 'required|max:250',

        ]);

           //   return $request->all();
   
           $cliente->update($request->all());
   
   
           if ($request->hasFile('image')) {
   
               if ($cliente->image_url) {
                   Storage::delete($cliente->image_url);
               }
   
               $nameFile = Str::slug($request->name) . '.' . $request->image->extension();
               $image_url = $request->image->storeAs('clients', $nameFile);
   
               // $nameFile = Str::slug($request->title) . '.' . $request->image->extension();
   
               // $image_url = Storage::putFileAs('posts', $request->image, $nameFile);
   
               $cliente->image_url = $image_url;
               $cliente->save();
   
               // $image_url = Storage::put('posts', $request->file('image'));
   
               // $post->image_url = $image_url;
               // $post->save();
   
           }
   
   
           return redirect()->route('admin.clientes.edit', $cliente)->with('info','Los datos del Cliente fueron actualizados')->with('tipo','info');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $cliente)
    {
        $cliente->delete();
        if ($cliente->image_url) {
            Storage::delete($cliente->image_url);
        }
        return redirect()->route('admin.clientes.index')->with('info','El cliente ha sido eliminado')->with('tipo','danger');;
    }
}
