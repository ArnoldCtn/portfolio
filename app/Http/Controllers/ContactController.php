<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactFormMail;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function submit(ContactFormRequest $request)
    {

         $validated =$request->validate([
                'name' => 'min:3',
                'email' => 'email',
                'messageContent' => 'min:5',
            ]);

            Message::create($validated);
            
        try {
            // Get validated data
            $validated = $request->validated();
            
            // Send email
            Mail::to('ctnarnold@gmail.com')->send(
                new ContactFormMail(
                    $validated['name'] ?? null,
                    $validated['email'] ?? null,
                    $validated['messageContent'] ?? null
                )
            );

            return back()->with('success', 'Thank you for your message! I will get back to you soon.');

        } catch (\Exception $e) {
            Log::error('Contact form error: ' . $e->getMessage());
            
            return back()->with('error', 'An error occurred while sending the message. Please try again.');
        }
    }
}