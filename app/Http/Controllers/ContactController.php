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
            return back()->with('toast_success', 'Pesan Berhasil di Kirim');
        } catch (\Exception $e) {
            return back()->with('toast_error', 'Pesan Gagal di Kirim');
        }
    }
}
