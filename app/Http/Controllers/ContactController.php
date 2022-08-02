<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    function sendMail(Request $request)
    {
        try {
            Contact::create($request->all());
            return redirect()->back()->with('success', 'OK');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', '!OK');
        }
    }
}
