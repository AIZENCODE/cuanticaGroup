<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Approach;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class ApproachController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin.enfoques.index')->only('index');
        $this->middleware('can:admin.enfoques.create')->only('create','store');
        $this->middleware('can:admin.enfoques.edit')->only('edit','update');
        $this->middleware('can:admin.enfoques.destroy')->only('destroy');
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $approachs= Approach::all();

        return view('admin.approach.index',compact('approachs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.approach.create');
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
            'color' => 'required',
            'description' => 'required|string|max:255',


        ]);

        $approach = Approach::create($request->all());

        // return $request->all();

        if ($request->image) {

            $nameFileico = Str::slug($request->name) . '.' . $request->image->extension();
            $image_url = $request->image->storeAs('enfoques', $nameFileico);

            $approach->image_url = $image_url;
        };

    

        $approach->save();

        return redirect()->route('admin.enfoques.edit', $approach);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Approach  $approach
     * @return \Illuminate\Http\Response
     */
    public function show(Approach $approach)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Approach  $approach
     * @return \Illuminate\Http\Response
     */
    public function edit(Approach $enfoque)
    {
        return view('admin.approach.edit', compact('enfoque'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Approach  $approach
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Approach $enfoque)
    {
        $request->validate([

            'name' => 'required|string|max:255',
            'color' => 'required',
            'description' => 'required|string|max:255',
    
        ]);
            //  return $request->all();
   
           $enfoque->update($request->all());
   
   
           if ($request->hasFile('image')) {
   
               if ($enfoque->image_url) {
                   Storage::delete($enfoque->image_url);
               }
   
               $nameFileico = Str::slug($request->name) . '.' . $request->image->extension();
               $image_url = $request->image->storeAs('enfoques', $nameFileico);
   
               $enfoque->image_url = $image_url;
               $enfoque->save();
   
           }
   
   
           return redirect()->route('admin.enfoques.edit', $enfoque);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Approach  $approach
     * @return \Illuminate\Http\Response
     */
    public function destroy(Approach $enfoque)
    {
        $enfoque->delete();
        if ($enfoque->image_url) {
            Storage::delete($enfoque->image_url);
        }
        return redirect()->route('admin.enfoques.index');
    }
}
