<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Petition;
use Illuminate\Http\Request;

class PetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petitions=Petition::orderBy('updated_at', 'desc')->get();
        return view('admin.petitions.index', compact('petitions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $action='create';
        return view('admin.petitions.create', compact('action'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'link' => 'required|url',
            'image' => 'nullable|image'
        ]);

        $post = Petition::create(['title' => $request->title,
            'link' => $request->link,
        ]);
        $post->uploadImage($request->image);

        return redirect()->route('petitions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $petition=Petition::find($id);
        $action='edit';
        return view('admin.petitions.create', compact('action', 'petition'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'link' => 'required|url',
            'image' => 'nullable|image'
        ]);
        $petition = Petition::find($id);
        $petition->fill($request->all());
        $petition->save();
        $petition->uploadImage($request->image);

        return redirect()->route('petitions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Petition::find($id)->remove();

        return redirect()->route('petitions.index');
    }
}
