<?php

namespace App\Http\Controllers;

use App\Mail\ContactForMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('zcontact.send');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $data = [
            'name' => $request->name,
            'subject' => $request->subject,
            'email' => $request->email,
            'message' => $request->message,
        ];

        Mail::to('jeremietshibangu66@gmail.com')->send(new ContactForMail($data));

        return back()->with('msg', 'Votre message a été envoyé. Merci !');
    }
    public function apropos(){
        return view('zabout.index');
    }
}
