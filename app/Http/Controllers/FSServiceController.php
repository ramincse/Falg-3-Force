<?php

namespace App\Http\Controllers;

use App\Models\FSService;
use Illuminate\Http\Request;

class FSServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_data = FSService::all();
        return view('admin.fsservice.index', compact('all_data'));
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
            'title'     => 'required',
            'content'   => 'required',
        ]);

        if ($request->hasFile('photo')) {
            $img = $request->file('photo');
            $photo_uname = md5(time() . rand()) . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('media/fsservice'), $photo_uname);
        }

        FSService::create([	 	 	 	
            'title'     => $request->title,
            'sub_title' => $request->sub_title,
            'content'   => $request->content,
            'photo'     => $photo_uname,
            'photo_name' => $request->photo_name,
        ]);

        return redirect()->route('fsservice.index')->with('success', 'Service Added Successfull!');
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
        $edit_data = FSService::find($id);
        return [
            'id'        => $edit_data->id,
            'title'     => $edit_data->title,
            'sub_title' => $edit_data->sub_title,
            'content'   => $edit_data->content,            
            'photo'     => $edit_data->photo,
            'photo_name' => $edit_data->photo_name,
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
        $update_data = FSService::find($request->id);

        if ($request->hasFile('new_photo')) {
            $img = $request->file('new_photo');
            $photo_uname = md5(time() . rand()) . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('media/fsservice'), $photo_uname);
            unlink('media/fsservice/' . $update_data->photo);
        } else {
            $photo_uname = $update_data->photo;
        }

        $update_data->title     = $request->title;
        $update_data->sub_title = $request->sub_title;
        $update_data->content   = $request->content;
        $update_data->photo     = $photo_uname;
        $update_data->photo_name = $request->photo_name;
        $update_data->update();

        return redirect()->route('fsservice.index')->with('success', 'Service updated successfull!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_data = FSService::find($id);
        $delete_data->delete();
        if ($delete_data) {
            unlink('media/fsservice/' . $delete_data->photo);
        }
        return redirect()->route('fsservice.index')->with('success', 'Service deleted successfull!');
    }

    public function updateFSServiceStatus($id)
    {
        $status = FSService::find($id);

        if ($status->status == true) {
            $status->status = false;
            $status->update();
        } else {
            $status->status = true;
            $status->update();
        }
    }
}
