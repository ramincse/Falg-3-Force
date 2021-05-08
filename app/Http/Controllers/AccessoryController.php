<?php

namespace App\Http\Controllers;

use App\Models\Accessory;
use App\Models\Client;
use Illuminate\Http\Request;

class AccessoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_data = Accessory::all();
        return view('admin.accessories.index', compact('all_data'));
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
        $cat_id_json = json_encode($request->cat_id);

        if ($request->hasFile('photo')) {
            $img = $request->file('photo');
            $photo_uname = md5(time() . rand()) . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('media/accessories'), $photo_uname);
        }

        Accessory::create([
            'name'      => $request->name,
            'photo'     => $photo_uname,
            'cat_id'    => $cat_id_json,
        ]);

        return redirect()->route('accessory.index')->with('success', 'Accessories Added Successfull!');
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
        $edit_data = Accessory::find($id);
        return [
            'id'        => $edit_data->id,
            'name'      => $edit_data->name,
            'photo'     => $edit_data->photo,
        ];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $cat_id_json = json_encode($request->cat_id);

        $update_data = Accessory::find($request->id);

        if ($request->hasFile('new_photo')) {
            $img = $request->file('new_photo');
            $photo_uname = md5(time() . rand()) . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('media/accessories'), $photo_uname);
            unlink('media/accessories/' . $update_data->photo);
        } else {
            $photo_uname = $update_data->photo;
        }

        $update_data->name   = $request->name;
        $update_data->photo  = $photo_uname;
        $update_data->cat_id = $cat_id_json;
        $update_data->update();

        return redirect()->route('accessory.index')->with('success', 'Accessories updated successfull!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_data = Accessory::find($id);
        $delete_data->delete();
        if ($delete_data) {
            unlink('media/accessories/' . $delete_data->photo);
        }
        return redirect()->route('accessory.index')->with('success', 'accessories deleted successfull!');
    }

    public function updateAccessoryStatus($id)
    {
        $status = Accessory::find($id);

        if ($status->status == true) {
            $status->status = false;
            $status->update();
        } else {
            $status->status = true;
            $status->update();
        }
    }
    
}
