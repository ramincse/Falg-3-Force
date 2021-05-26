<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    public function mailJao(Request $request){
		$mail_details = [
            'name'      => $request->name,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'subject'   => $request->subject,
            'message'   => $request->message,
        ];

        Mail::to('ramin.cse2009@gmail.com') -> send(new TestMail($mail_details));
	}
}
