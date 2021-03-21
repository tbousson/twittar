<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class FrontController extends Controller
{
    public function profile()
    {
        return Inertia::render('Profile', [
            'messages' => Auth::user()->messages
        ]);
    }
}
