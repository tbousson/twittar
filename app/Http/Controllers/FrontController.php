<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Support\Facades\Validator;

class FrontController extends Controller
{

    public function home () 
    {
        $data = Message::with([
            'user' => function($query){
                $query->select('id','name','displayName','profile_photo_path'); 
            }])->withCount('comments')    
            ->orderBy('created_at','DESC')->get();
        //query select fields id,name,displayName from user relation
        //withCount gets the ammount of comments
        //OrderBy created_at, desc -> eerste nieuwste dan oudere messages
        
        return Inertia::render('Home', [
            'data' => $data
        ]);
    }
    

    public function profile()
    {
        $id = Auth::user()->id;
        $user = User::select('id','name','displayName')->withCount(['followings','followers'])->findOrFail($id);
        $data = Message::where('user_id', $id)->with([
            'user' => function($query){
                $query->select('id','name','displayName','profile_photo_path'); 
            }])->withCount('comments')    
            ->orderBy('created_at','DESC')->get();
        //query select fields id,name,displayName from user relation
        //withCount gets the ammount of comments
        //OrderBy created_at, desc -> eerste nieuwste dan oudere messages
        return Inertia::render('Profile', [
            'data' => $data,
            'user' => $user
        ]);
    }

    public function userPage ($displayName) {
        $id = User::where('displayName', $displayName)->get(['id']);
       
        $id = $id[0]->id;
        $user = User::withCount(['followers','followings'])->findOrFail($id);
        $data = Message::where('user_id', $id)->with([
            'user' => function($query){
                $query->select('id','name','displayName','profile_photo_path'); 
            }])->withCount('comments')    
            ->orderBy('created_at','DESC')->get();
        //query select fields id,name,displayName from user relation
        //withCount gets the ammount of comments
        //OrderBy created_at, desc -> eerste nieuwste dan oudere messages
        return Inertia::render('UserPage', [
            'data' => $data,
            'user' => $user
            
        ]);
    }
    public function explore()
    {
        $data = Message::query()
        ->with(array('user' => function($query) {
                        $query->select('id','name','displayName','profile_photo_path');
                    }))->withCount('comments')->orderBy('created_at','DESC')->get();
        return Inertia::render('Explore', [
            'data' => $data
        ]);
    }

    public function createMessage (Request $request) {
        Validator::make($request->all(), [
            'content' => ['required'],
        ])->validate();

        $message = new Message;
        $message->content = $request->content;
        $message->user_id = Auth::user()->id;
        $message->save();  

        return redirect()->back();
    }

    public function MessagePage ($displayName,$id) {
        $message = Message::with([
            'comments' => function($query) {
                $query->with(['user' => function ($query) { $query->select('id','name','displayName','profile_photo_path');
                }]);
             },
            'user' => function($query) {
                $query->select('id','name','displayName','profile_photo_path');
            }
        ])->withCount('Comments')->findOrFail($id);
        
        return Inertia::render('MessagePage', [
            'message' => $message,
        ]);
    }
}
