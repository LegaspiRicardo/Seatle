<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/panel-control';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }


    public function logout(Request $request)
    {
        Auth::logout();
    
        // Personaliza el redireccionamiento después del logout
         return redirect('/inicioSesion'); // Reemplaza '/otra-ruta' con la URL que desees
    }



}
