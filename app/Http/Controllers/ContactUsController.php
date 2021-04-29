<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function showContactUS()
    {
        $contactus = ContactUs::find(1);
        return view('admin.contact.index', compact('contactus'));
    }

    public function insertContactUS(Request $request)
    {
        $corporate_office = [
            'c_name'    => $request->c_name,
            'c_address' => $request->c_address,
            'c_phone'   => $request->c_phone,
            'c_cell1'   => $request->c_cell1,
            'c_cell2'   => $request->c_cell2,
            'c_email1'  => $request->c_email1,
            'c_email2'  => $request->c_email2,
        ];
        $corporate_office_json = json_encode($corporate_office);

        $dhaka1_office = [
            'd1_name'    => $request->d1_name,
            'd1_address' => $request->d1_address,
            'd1_cell1'   => $request->d1_cell1,
            'd1_cell2'   => $request->d1_cell2,
            'd1_email1'  => $request->d1_email1,
            'd1_email2'  => $request->d1_email2,
        ];
        $dhaka1_office_json = json_encode($dhaka1_office);

        $dhaka2_office = [
            'd2_name'    => $request->d2_name,
            'd2_address' => $request->d2_address,
            'd2_cell1'   => $request->d2_cell1,
            'd2_cell2'   => $request->d2_cell2,
            'd2_email1'  => $request->d2_email1,
            'd2_email2'  => $request->d2_email2,
        ];
        $dhaka2_office_json = json_encode($dhaka2_office);

        $training_center1 = [
            'tc1_name'      => $request->tc1_name,
            'tc1_address'   => $request->tc1_address,
            'tc1_cell'      => $request->tc1_cell,
            'tc1_email'     => $request->tc1_email,
        ];
        $training_center1_json = json_encode($training_center1);

        $training_center2 = [
            'tc2_name'      => $request->tc2_name,
            'tc2_address'   => $request->tc2_address,
            'tc2_cell'      => $request->tc2_cell,
            'tc2_email'     => $request->tc2_email,
        ];
        $training_center2_json = json_encode($training_center2);

        $open_time = [
            'day'      => $request->day,
            'time'   => $request->time,
            'quotes'      => $request->quotes,
        ];
        $open_time_json = json_encode($open_time);

        $contactus = ContactUs::find(1);

        $contactus->corporate_office    = $corporate_office_json;
        $contactus->dhaka1_office       = $dhaka1_office_json;
        $contactus->dhaka2_office       = $dhaka2_office_json;
        $contactus->training_center1    = $training_center1_json;
        $contactus->training_center2    = $training_center2_json;
        $contactus->open_time           = $open_time_json;
        $contactus->google_link         = $request->google_link;
        $contactus->update();

        return redirect()->route('contact.us')->with('success', 'Updeted successfull!');
    }
}
