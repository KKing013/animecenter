<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Validation\ValidationException;

class NewsLetterController extends Controller
{
    public function __invoke(Newsletter $newsletter) {

        request()->validate(['email' => 'required|email']);
    
        try {
        
            $newsletter->subscribe(request('email'));
        
        
        } catch(Exception $e) {
            
            throw ValidationException::withMessages([
                
                'email' => 'This email is not valid.'
            ]);
        
        }
        
        return redirect('/')->with('success', 'Signed up for the newsletter!');

    }
}
