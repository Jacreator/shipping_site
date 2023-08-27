<?php

namespace App\Http\Controllers;

use App\Mail\BookingMailNotice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function create(Request $request)
    {
        $cleanData = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'pick' => $request->pick
        ];
        // dd(config('app.mailTo'));
        Mail::to(config('app.mailTo'))->send(new BookingMailNotice($cleanData));
        return redirect()->back()->with('message', 'Booking done successfully check your email for updates');
    }
}
