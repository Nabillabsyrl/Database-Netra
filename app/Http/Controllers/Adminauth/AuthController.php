<?php

namespace App\Http\Controllers\AdminAuth;

use App\user;
use validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\auth\Throttleslogins;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Auth;

class AuthController extends Controller
{
    use AuthorizesRequests, ValidatesRequests, Throttleslogins;
    protected $redirectTo='/dashboard';
    protected $guard='admin';

    public function showLoginForm()
    {
    	if (Auth::guard('admin')->check()) 
    	{
    		return redirect('/dashboard');
    	}
    	return view('login');
    }

    public function logout()
    {
    	Auth::guard('admin')->logout();
    	return redirect('/');
    }
}
