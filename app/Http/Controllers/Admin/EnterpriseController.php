<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Enterprise;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class EnterpriseController extends Controller
{


    public function __construct()
    {
        $this->middleware('can:admin.informacion.index')->only('index');
        $this->middleware('can:admin.informacion.create')->only('create','store');
        $this->middleware('can:admin.informacion.edit')->only('edit','update');
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informacion = Enterprise::first();
        // return $enterprise;
        return view('admin.enterprise.index',compact('informacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enterprise  $enterprise
     * @return \Illuminate\Http\Response
     */
    public function show(Enterprise $enterprise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enterprise  $enterprise
     * @return \Illuminate\Http\Response
     */
    public function edit(Enterprise $informacion)
    {
        
        return view('admin.enterprise.edit',compact('informacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Enterprise  $enterprise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enterprise $informacion)
    {
        $request->validate([

            'name' => 'required|max:60',
            'razon_social' => 'required|max:60',
            
        ]);

           //   return $request->all();
   
           $informacion->update($request->all());
   
   
           if ($request->hasFile('image')) {
   
               if ($informacion->image_url) {
                   Storage::delete($informacion->image_url);
               }
   
               $nameFile = Str::slug($request->name) . '.' . $request->image->extension();
               $image_url = $request->image->storeAs('enterprise', $nameFile);
   
               // $nameFile = Str::slug($request->title) . '.' . $request->image->extension();
   
               // $image_url = Storage::putFileAs('posts', $request->image, $nameFile);
   
               $informacion->image_url = $image_url;
               $informacion->save();
   
           
   
           }
   
   
           return redirect()->route('admin.informacion.index', $informacion);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enterprise  $enterprise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enterprise $enterprise)
    {
        //
    }
}
