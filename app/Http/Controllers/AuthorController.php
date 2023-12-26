<?php

namespace App\Http\Controllers;


use App\Models\Author;
use Illuminate\Http\Request;
use App\Models\Biography;

class AuthorController extends Controller
{
    public function show($id)
    {
        $author = Author::with('biography')->find($id);
    
        if (!$author) {
            return view('welcome')->withErrors('Author not found');
        }
    
        if (!$author->biography) {
            return view('welcome')->withErrors('Biography not found');
        }
    
        return view('welcome', ['author' => $author]);
    }
}
