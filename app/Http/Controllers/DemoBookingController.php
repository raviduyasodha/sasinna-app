<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DemoBooking;

class DemoBookingController extends Controller
{
    public function showForm()
    {
        return view('book-demo');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'product' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);

        DemoBooking::create($request->all());

        Mail::to('raviduyasodha9@gmail.com')->send(new DemoBookedMail($booking));

        return redirect()->back()->with('success', 'Your demo request has been submitted!');
    }
}
