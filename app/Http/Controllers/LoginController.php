<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Session;

class LoginController extends Controller
{
	// public function login(Request $request){
	// 	$username=$request->username;	
	// 	$password=$request->password;

	// 	$user = User::where('username', $username)->first();
	// 	// dd(\Hash::check($password, $user->password));	
	// 	if (\Hash::check($password, $user->password)) {
	// 		Session::put('username', $user->username);
	// 		Session::put('role', $user->role);
	// 		if ($user->role == 'admin') {
	// 			return view('bor/index');
	// 		}
	// 		return view('user.index');
	// 	}
 	// 	return view('user.user');
	// }

	public function register(Request $request){
		User::create([
			'name' => $request->name,
			'username' => $request->username,
			'email' => $request->email,
			'password' => \Hash::make($request->password),
		]);
		return redirect('/use');
	}

	public function authenticate(Request $request)
	{
		$credentials = $request->validate([
			'email' => ['required', 'email'],
			'password' => ['required'],
		]);

		if (Auth::attempt($credentials)) {
			if (Auth::user()->role == 'admin') {
				$request->session()->regenerate();
				return redirect()->intended('bor');
			}else {
				$request->session()->regenerate();
				return redirect('/');
			}
		}

		return back()->withErrors([
			'email' => 'The provided credentials do not match our records.',
		]);
	}

	public function logout(Request $request)
	{
		Auth::logout();

		$request->session()->invalidate();

		$request->session()->regenerateToken();

		return redirect('/');
	}
}
