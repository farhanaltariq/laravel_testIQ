<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

class FeedController extends Controller
{
    public function feedback(Request $request)
    {

        $feed = Contact::all();

        return view('dashboard.feedback.feedback', compact('feed'));
    }
}
