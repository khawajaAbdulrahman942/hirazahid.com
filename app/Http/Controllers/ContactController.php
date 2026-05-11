<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;
use App\Mail\ContactMessageMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        $contact = Contact::create($validated);

        // Send email to admin (us)
        $receiverEmail = env('CONTACT_RECEIVER_EMAIL', config('mail.from.address'));
        
        if ($receiverEmail) {
            Mail::to($receiverEmail)->send(new ContactMessageMail($contact));
        }

        return back()->with('success', 'Thank you for your message! We will get back to you soon.');
    }
}
