<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class FollowersController extends Controller
{
    public function __contruct()
    {
    	$this->middleware('auth');
    }

    public function store(User $user)
    {
    	if (Auth::user()->id === $user->id) {
    		return rediect('/');
    	}

    	if (!Auth::user()->isFollowing($user->id)) {
    		Auth::user()->follow($user->id);
    	}

    	return redirect()->route('users.show', $user->id);
    }

    public function destroy(User $user)
    {
    	if (Auth::user()->id === $user->id) {
    		return rediect('/');
    	}

    	if (Auth::user()->isFollowing($user->id)) {
    		Auth::user()->unfollow($user->id);
    	}

    	return redirect()->route('users.show', $user->id);
    }
}