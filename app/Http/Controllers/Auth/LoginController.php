<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {

        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request) {

        $credentials = $request->validate([

            'email' => 'required|email:dns',

            'password' => 'required',

        ],[
            'email.required' => 'Email tidak boleh kosong',
            
            'password.required' => 'Password tidak boleh kosong',
        ]);

        // dd('berhasil login!');


        if(Auth::attempt($credentials)){

            $request->session()->regenerate();

            if(auth()->user()->role == 1) {

                // return redirect()->intended('/user')->withToastSuccess('Berhasil Login!');

                return redirect('/user')->withToastSuccess('Berhasil Login!');

            } else {

                return redirect()->intended('/admin')->withToastSuccess('Berhasil Login!');
            }
            
        } else {

            return back()->withToast('Login Gagal!','error');
        }
    }
}
