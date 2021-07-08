<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function change_password(Request $request, User $user)
    {
        $request->validate([
            'password' => ['required', 'string', 'confirmed'],
        ]);
        if (auth()->user()->id == $user->id) {

            $user->update([
                'password' => Hash::make($request->password)
            ]);
            return redirect()->route('users.index')->with('message', 'user  password updated Successfully');
        }
        return redirect()->route('users.index')->with('message', 'You cannot change other\'s password');
    }
}
