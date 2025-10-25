<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('front.contact');
    }

    public function storeMessage(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        Contact::create($request->only(['name', 'subject', 'email', 'phone', 'message']));

        // نعيد التوجيه مع إشعار
        $notification = [
            'message' => 'Your Mail Sent Successfully',
            'alert_type' => 'success'
        ];

        return redirect()->route('contact.page')->with($notification);
    }
}
