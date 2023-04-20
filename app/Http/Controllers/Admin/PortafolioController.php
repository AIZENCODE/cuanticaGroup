<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portafolio;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PortafolioController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin.portafolios.index')->only('index');
        $this->middleware('can:admin.portafolios.create')->only('create','store');
        $this->middleware('can:admin.portafolios.edit')->only('edit','update');
        $this->middleware('can:admin.portafolios.destroy')->only('destroy');
        
    }
    


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portafolios = Portafolio::all();

        return view('admin.portafolios.index', compact('portafolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portafolios.create');
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
            'description' => 'required|string|max:255',


        ]);

        // $post=Post::create([
        //     'title' => $request->title,
        //     'category_id' => $request->category_id,
        // ]);

            // return $request->all();
        $portafolio = Portafolio::create($request->all());
  

        if ($request->image) {
            
            $nameFile = Str::slug($request->name) . '.' . $request->image->extension();
            $image_url = $request->image->storeAs('portafolio', $nameFile);

            $portafolio->image_url = $image_url;
        };

        $portafolio->save();

        return redirect()->route('admin.portafolios.edit', $portafolio);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portafolio  $portafolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portafolio $portafolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portafolio  $portafolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portafolio $portafolio)
    {
        return view('admin.portafolios.edit', compact('portafolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portafolio  $portafolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portafolio $portafolio)
    {
        $request->validate([

            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:portafolios,slug,'.$portafolio->id,
            'description' => 'required|string|max:255',
            'content' => $request->get('status') ? 'required|string' : 'nullable',


        ]);

           //   return $request->all();
   
           $portafolio->update($request->all());
   
   
           if ($request->hasFile('image')) {
   
               if ($portafolio->image_url) {
                   Storage::delete($portafolio->image_url);
               }
   
               $nameFile = Str::slug($request->name) . '.' . $request->image->extension();
               $image_url = $request->image->storeAs('portafolio', $nameFile);
   
               // $nameFile = Str::slug($request->title) . '.' . $request->image->extension();
   
               // $image_url = Storage::putFileAs('posts', $request->image, $nameFile);
   
               $portafolio->image_url = $image_url;
               $portafolio->save();
   
               // $image_url = Storage::put('posts', $request->file('image'));
   
               // $post->image_url = $image_url;
               // $post->save();
   
           }
   
   
           return redirect()->route('admin.portafolios.edit', $portafolio);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portafolio  $portafolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portafolio $portafolio)
    {
        $portafolio->delete();
        if ($portafolio->image_url) {
            Storage::delete($portafolio->image_url);
        }
        return redirect()->route('admin.portafolios.index');
    }
}
