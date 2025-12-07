<?php

namespace App\Http\Controllers;

use App\Models\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::first();
        return view('profile.index', compact('profile'));
    }
}
