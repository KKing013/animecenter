<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function __invoke(Request $request)
    {


        $request->validate([

            'name' => 'required',
            'email' => ['required', 'email'],
            'comment' => 'required'


        ]);

        Mail::send(
            'email',
            [
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'comment' => $request->get('comment')
            ],
            function ($message) {
                $message->from('kjking0133@gmail.com');
                $message->to('kjking0133@gmail.com', 'Kevin')
                    ->subject('Contact Form');
            }
        );

        return back()->with('success', 'Thanks for contacting us!');
    }
}
