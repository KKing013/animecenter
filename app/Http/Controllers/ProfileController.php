<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit(User $user)
    {

       return view('profile-edit', [

            'user' => $user

           

        ]);
    }

    public function update(User $user)
    {

        $attributes = request()->validate([

            'description' => 'max:255',
            'avatar' => 'image',
            'url' => 'url'
            

        ]);

        if (isset($attributes['avatar'])) {

            $attributes['avatar'] = request()->file('avatar')->store('avatars', 'public');
        }


        $user->update($attributes);

        return back()->with('success', 'User has been updated.');
    }
}
