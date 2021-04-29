<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_data = Slider::all();
        return view('admin.slider.index', compact('all_data'));
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
        $this->validate($request, [
            'photo' => 'required',
        ]);

        if ($request->hasFile('photo')) {
            $img = $request->file('photo');
            $photo_uname = md5(time() . rand()) . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('media/slider'), $photo_uname);
        }

        Slider::create([
            'title' => $request->title,
            'photo' => $photo_uname,
        ]);

        return redirect()->route('slider.index')->with('success', 'Slider Added Successfull!');

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
        $edit_data = Slider::find($id);
        return [
            'id'        => $edit_data->id,
            'title'     => $edit_data->title,
            'sub_title' => $edit_data->sub_title,
            'button'    => $edit_data->button,
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
        $update_data = Slider::find($request->id);

        if($request->hasFile('new_photo')){
            $img = $request->file('new_photo');
            $photo_uname = md5(time() . rand()) . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('media/slider'), $photo_uname);
            unlink('media/slider/' . $update_data->photo);
        }else{
            $photo_uname = $update_data->photo;
        }

        $update_data->title = $request->title;
        $update_data->sub_title = $request->sub_title;
        $update_data->button = $request->button;
        $update_data->photo = $photo_uname;
        $update_data->update();

        return redirect()->route('slider.index')->with('success', 'Slider updated successfull!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_data = Slider::find($id);
        $delete_data->delete();
        if ($delete_data) {
            unlink('media/slider/' . $delete_data->photo);
        }
        return redirect()->route('slider.index')->with('success', 'Slider deleted successfull!');
    }

    /**
     * Slider Status Update
     */
    public function updateSliderStatus($id)
    {
        $status = Slider::find($id);

        if($status->status == true){
            $status->status = false;
            $status->update();
        }else{
            $status->status = true;
            $status->update();
        }
    }
}
