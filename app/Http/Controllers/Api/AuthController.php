<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\{Hash, Auth};
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request)
    {
    	$request->validate([
	        'email' => 'required|email',
	        'password' => 'required',
	    ]);

	    $user = User::where('email', $request->email)->first();

	    if (! $user || ! Hash::check($request->password, $user->password)) {
	        throw ValidationException::withMessages([
	            'email' => ['The provided credentials are incorrect.'],
	        ]);
	    }

	    return ['token'=>$user->createToken($request->email)->plainTextToken];
    }
}
