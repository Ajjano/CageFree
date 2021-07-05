<?php

namespace App\Http\Controllers\Admin;

use App\BatterySystemContents;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BatterySystemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = BatterySystemContents::all();
        return view('admin.battery.index', compact('carts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $action = 'create';
        return view('admin.battery.create', compact('action'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'status' => 'nullable',
            'image' => 'nullable|image'
        ]);
        $cart = new BatterySystemContents;
        $cart->title = $request->title;
        $cart->description = $request->description;
        $cart->save();
        $cart->setStatus($request->status);
        $cart->uploadImage($request->image);

        return redirect()->route('battery-system.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cart = BatterySystemContents::find($id);
        $action = 'edit';
        return view('admin.battery.create', compact('action', 'cart'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'status' => 'nullable',
            'image' => 'nullable|image'
        ]);
        $cart = BatterySystemContents::find($id);
        $cart->title = $request->title;
        $cart->description = $request->description;
        $cart->save();
        $cart->setStatus($request->status);
        $cart->uploadImage($request->image);

        return redirect()->route('battery-system.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BatterySystemContents::find($id)->remove();

        return redirect()->route('battery-system.index');
    }
}
