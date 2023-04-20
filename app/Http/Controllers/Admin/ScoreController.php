<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Score;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ScoreController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin.opiniones.index')->only('index');
        $this->middleware('can:admin.opiniones.create')->only('create','store');
        $this->middleware('can:admin.opiniones.edit')->only('edit','update');
        $this->middleware('can:admin.opiniones.destroy')->only('destroy');
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $scores = Score::all();
        return view('admin.scores.index',compact('scores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.scores.create');
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
            'titulo' => 'required|max:60',
            'comment' => 'required|max:255',
            'calificacion' => 'required',
            // 'status' => 'required|boolean',

        ]);
        // return $request->all();
         $score = Score::create($request->all());

         if ($request->image) {

             $nameFile = Str::slug($request->name) . '.' . $request->image->extension();
             $image_url = $request->image->storeAs('scores', $nameFile);

             $score->image_url = $image_url;
         };

         $score->save();

         return redirect()->route('admin.opiniones.edit', $score);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function show(Score $score)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function edit(Score $opinione)
    {
        return view('admin.scores.edit', compact('opinione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Score $opinione)
    {
        $request->validate([

            'name' => 'required|max:60',
            'titulo' => 'required|max:60',
            'comment' => 'required|max:255',
            'calificacion' => 'required',
            // 'status' => 'required|boolean',

        ]);

           //   return $request->all();
   
           $opinione->update($request->all());
   
   
           if ($request->hasFile('image')) {
   
               if ($opinione->image_url) {
                   Storage::delete($opinione->image_url);
               }
   
               $nameFile = Str::slug($request->name) . '.' . $request->image->extension();
               $image_url = $request->image->storeAs('scores', $nameFile);
   
           
   
               $opinione->image_url = $image_url;
               $opinione->save();
   
               
           }
   
   
           return redirect()->route('admin.opiniones.edit', $opinione);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function destroy(Score $opinione)
    {
        $opinione->delete();
        if ($opinione->image_url) {
            Storage::delete($opinione->image_url);
        }
        return redirect()->route('admin.opiniones.index');
    }
}
