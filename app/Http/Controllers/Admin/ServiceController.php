<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ServiceController extends Controller
{



    public function __construct()
    {
        $this->middleware('can:admin.services.index')->only('index');
        $this->middleware('can:admin.services.create')->only('create','store');
        $this->middleware('can:admin.services.edit')->only('edit','update');
        $this->middleware('can:admin.services.destroy')->only('destroy');
        
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();

        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.services.create');
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

            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:portafolios',
            'description' => 'required|string|max:400',


        ]);

        $service = Service::create($request->all());

        // return $request->all();

        if ($request->ico) {

            $nameFileico = Str::slug($request->name) . '.' . $request->ico->extension();
            $ico_url = $request->ico->storeAs('icos', $nameFileico);

            $service->ico_url = $ico_url;
        };

        if ($request->image) {

            $nameFile = Str::slug($request->name) . '.' . $request->image->extension();
            $image_url = $request->image->storeAs('services', $nameFile);

            $service->image_url = $image_url;
        };

      

        $service->save();

        return redirect()->route('admin.services.edit', $service);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:services,slug,'.$service->id,
            'description' => 'required|string|max:400',
            'content' => $request->get('status') ? 'required|string' : 'nullable',
        ]);

           //   return $request->all();
   
           $service->update($request->all());
   
   
           if ($request->hasFile('image')) {
   
               if ($service->image_url) {
                   Storage::delete($service->image_url);
               }
               $nameFile = Str::slug($request->name) . '.' . $request->image->extension();
               $image_url = $request->image->storeAs('services', $nameFile);
   
               $service->image_url = $image_url;
               $service->save();
   
           }

           if ($request->hasFile('ico')) {
   
               if ($service->ico_url) {
                   Storage::delete($service->ico_url);
               }
               $nameFileico = Str::slug($request->name) . '.' . $request->ico->extension();
               $ico_url = $request->ico->storeAs('icos', $nameFileico);
   
               $service->ico_url = $ico_url;
               $service->save();
   
           }
   
   
           return redirect()->route('admin.services.edit', $service);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        if ($service->image_url) {
            Storage::delete($service->image_url);
        }

        if ($service->ico_url) {
            Storage::delete($service->ico_url);
        }
    
        return redirect()->route('admin.services.index');
    }
}
