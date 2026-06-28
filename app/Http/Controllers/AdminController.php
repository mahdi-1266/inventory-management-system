<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;


class AdminController extends Controller
{
	// Logout method start
	public function AdminLogout(Request $request){
		Auth::guard('web')->logout();
		$request->session()->invalidate();
		$request->session()->regenerateToken();
		return redirect('/login');
	}
	// Logout method end


	// Profile method start
	public function AdminProfile(){
		$id = Auth::user()->id;
		$profileData = User::find($id);
		return view('admin.admin_profile', compact('profileData'));
	}
	// Profile method end



}
