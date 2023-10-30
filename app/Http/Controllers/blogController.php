<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;



class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('blogs',['posts'=>Post::all()]);
    }
    public function show($id)
{
    $user_id = User::find($id);
    $user_post=$user_id->posts;
    $users = User::all();



    // Add error handling if the person is not found

    return view('show', compact('user_post','user_id','users',));
}
}