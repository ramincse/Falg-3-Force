<?php

namespace App\Http\Controllers;

use App\Models\OurService;
use Illuminate\Http\Request;

class OurServiceController extends Controller
{
    /**
     * Top Service
     */
    public function showToService()
    {
        $all_data = OurService::find(1);
        return view('admin.our-service.top-service', compact('all_data'));
    }

    public function updateToService(Request $request)
    {
        $update_data = OurService::find(1);

        $data_json_decode = json_decode($update_data->service_photo);

        if ($request->hasFile('new_photo')) {
             $img = $request->file('new_photo');
             $photo_uname = md5(time() . rand()) . '.' . $img->getClientOriginalExtension();
             $img->move(public_path('media/our_service/top'), $photo_uname);
             unlink('media/our_service/top/' . $update_data->top_photo);
        } else {
             $photo_uname = $update_data->top_photo;
        }

        if ($request->hasFile('photo1')) {
            $img = $request->file('photo1');
            $photo1 = md5(time() . rand()) . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('media/our_service'), $photo1);
            unlink('media/our_service/' . $data_json_decode->photo1);
       } else {
            $photo1 = $data_json_decode->photo1;
       }

       if ($request->hasFile('photo2')) {
        $img = $request->file('photo2');
        $photo2 = md5(time() . rand()) . '.' . $img->getClientOriginalExtension();
        $img->move(public_path('media/our_service'), $photo2);
        unlink('media/our_service/' . $data_json_decode->photo2);
        } else {
                $photo2 = $data_json_decode->photo2;
        }

        if ($request->hasFile('photo3')) {
            $img = $request->file('photo3');
            $photo3 = md5(time() . rand()) . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('media/our_service'), $photo3);
            unlink('media/our_service/' . $data_json_decode->photo3);
        } else {
            $photo3 = $data_json_decode->photo3;
        }

        if ($request->hasFile('photo4')) {
            $img = $request->file('photo4');
            $photo4 = md5(time() . rand()) . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('media/our_service'), $photo4);
            unlink('media/our_service/' . $data_json_decode->photo4);
        } else {
            $photo4 = $data_json_decode->photo4;
        }

        if ($request->hasFile('photo5')) {
            $img = $request->file('photo5');
            $photo5 = md5(time() . rand()) . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('media/our_service'), $photo5);
            unlink('media/our_service/' . $data_json_decode->photo5);
        } else {
            $photo5 = $data_json_decode->photo5;
        }

        if ($request->hasFile('photo6')) {
            $img = $request->file('photo6');
            $photo6 = md5(time() . rand()) . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('media/our_service'), $photo6);
            unlink('media/our_service/' . $data_json_decode->photo6);
        } else {
            $photo6 = $data_json_decode->photo6;
        }

        if ($request->hasFile('photo7')) {
            $img = $request->file('photo7');
            $photo7 = md5(time() . rand()) . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('media/our_service'), $photo7);
            unlink('media/our_service/' . $data_json_decode->photo7);
        } else {
            $photo7 = $data_json_decode->photo7;
        }

        if ($request->hasFile('photo8')) {
            $img = $request->file('photo8');
            $photo8 = md5(time() . rand()) . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('media/our_service'), $photo8);
            unlink('media/our_service/' . $data_json_decode->photo8);
        } else {
            $photo8 = $data_json_decode->photo8;
        }

        $all_photo = [
            'photo1' => $photo1,
            'photo2' => $photo2,
            'photo3' => $photo3,
            'photo4' => $photo4,
            'photo5' => $photo5,
            'photo6' => $photo6,
            'photo7' => $photo7,
            'photo8' => $photo8,
        ];

        $all_photo_json = json_encode($all_photo);

        $update_data->title = $request->title;
        $update_data->top_photo = $photo_uname;
        $update_data->service_photo = $all_photo_json;
        $update_data->update();
        return redirect()->route('top.service')->with('success', 'Updated successfull!');
    }
}
