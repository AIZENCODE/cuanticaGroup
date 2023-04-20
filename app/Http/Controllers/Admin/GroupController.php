<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GroupController extends Controller
{


    public function __construct()
    {
        $this->middleware('can:admin.equipo.index')->only('index');
        $this->middleware('can:admin.equipo.create')->only('create','store');
        $this->middleware('can:admin.equipo.edit')->only('edit','update');
        $this->middleware('can:admin.equipo.destroy')->only('destroy');
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $groups = Group::all();
        return view('admin.groups.index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.groups.create');
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
            'cargo' => 'required|max:60',
            'frase' => 'required|max:60',
            // 'status' => 'required|boolean',

        ]);
        $group = Group::create($request->all());

        if ($request->image) {

            $nameFile = Str::slug($request->name) . '.' . $request->image->extension();
            $image_url = $request->image->storeAs('groups', $nameFile);

            $group->image_url = $image_url;
        };

        $group->save();

        return redirect()->route('admin.equipo.edit', $group);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $equipo)
    {
        return view('admin.groups.edit', compact('equipo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $equipo)
    {
        $request->validate([

            'name' => 'required|max:60',
            'cargo' => 'required|max:60',
            'frase' => 'required|max:150',
            'status' => 'required|boolean',
        ]);

           //   return $request->all();
   
           $equipo->update($request->all());
   
   
           if ($request->hasFile('image')) {
   
               if ($equipo->image_url) {
                   Storage::delete($equipo->image_url);
               }
   
               $nameFile = Str::slug($request->name) . '.' . $request->image->extension();
               $image_url = $request->image->storeAs('groups', $nameFile);
   
               // $nameFile = Str::slug($request->title) . '.' . $request->image->extension();
   
               // $image_url = Storage::putFileAs('posts', $request->image, $nameFile);
   
               $equipo->image_url = $image_url;
               $equipo->save();
   
               // $image_url = Storage::put('posts', $request->file('image'));
   
               // $post->image_url = $image_url;
               // $post->save();
   
           }
   
   
           return redirect()->route('admin.equipo.edit', $equipo);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $equipo)
    {
        $equipo->delete();
        if ($equipo->image_url) {
            Storage::delete($equipo->image_url);
        }
        return redirect()->route('admin.equipo.index');
    }
}
