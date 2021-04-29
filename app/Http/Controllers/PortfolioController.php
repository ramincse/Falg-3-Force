<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_data = Portfolio::all();
        return view('portfolio.index', compact('all_data'));
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
            'title' => 'required',
        ]);

        if ($request->hasFile('photo')) {
            $img = $request->file('photo');
            $photo_uname = md5(time() . rand()) . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('media/portfolio'), $photo_uname);
        }

        Portfolio::create([
            'title' => $request->title,
            'photo' => $photo_uname,
        ]);

        return redirect()->route('portfolio.index')->with('success', 'Portfolio Added Successfull!');
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
        $edit_data = Portfolio::find($id);
        return [
            'id'        => $edit_data->id,
            'title'     => $edit_data->title,
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
        $update_data = Portfolio::find($request->id);

        if ($request->hasFile('new_photo')) {
            $img = $request->file('new_photo');
            $photo_uname = md5(time() . rand()) . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('media/portfolio'), $photo_uname);
            unlink('media/portfolio/' . $update_data->photo);
        } else {
            $photo_uname = $update_data->photo;
        }

        $update_data->title = $request->title;
        $update_data->photo = $photo_uname;
        $update_data->update();

        return redirect()->route('portfolio.index')->with('success', 'Portfolio updated successfull!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_data = Portfolio::find($id);
        $delete_data->delete();
        if ($delete_data) {
            unlink('media/portfolio/' . $delete_data->photo);
        }
        return redirect()->route('portfolio.index')->with('success', 'Portfolio deleted successfull!');
    }

    public function updatePortfolioStatus($id)
    {
        $status = Portfolio::find($id);

        if ($status->status == true) {
            $status->status = false;
            $status->update();
        } else {
            $status->status = true;
            $status->update();
        }
    }
}
