<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class FrontController extends Controller
{
    public function profile()
    {
        $user = User::where('id', Auth::user()->id)->get(['name','displayName','profile_photo_path']);
        return Inertia::render('Profile', [
            'messages' => Auth::user()->messages,
            'user' => $user[0]
        ]);
    }

    public function userPage ($displayName) {
        $user = User::where('displayName', $displayName)->get(['id','name','displayName','profile_photo_path']);
        $id = $user[0]->id;
        return Inertia::render('UserPage', [
            'data' => Message::where('user_id', $id)->get(),
            'user' => $user[0]
        ]);
    }
    public function explore()
    {
        return Inertia::render('Explore', [
            'data' => Message::query()
                        ->with(array('user' => function($query) {
                                        $query->select('id','name','displayName');
                                    }))->orderBy('created_at','DESC')->get()
        ]);
    }
}
