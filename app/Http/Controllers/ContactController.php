<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request ){
     $validated = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'bady' => 'required'
        ]);
     
        return $request->all();

    }
}
