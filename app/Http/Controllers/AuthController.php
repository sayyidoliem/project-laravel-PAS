<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function inputUser(Request $request){
        $request -> validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'password' => 'required|min:6'
        ]);

        $u = new Auth;
        $u -> firstName = $request -> firstName;
        $u -> lastName = $request -> lastName;
        $u -> email = $request -> email;
        $u -> password = Hash::make($request -> password);

        $s = $u -> save();
        if ($s) {
            return redirect() -> back() -> with('success', 'Register Berhasil');
        } else {
            return redirect() -> back() -> with('deleted', 'Register Gagal');
        }
    }

    public function login(){
        return view('auth.login');
    }

    public function userLogin(Request $request){
        $request -> validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        $l = Auth::where('email', '=', $request -> email) -> first();

        if ($l) {
            if (Hash::check($request -> password, $l -> password)) {
                $request -> session() -> put('userId', $l -> id);
                return redirect('bookList');
            }else {
                return back() -> with('gagal', 'password Anda salah');
            }
        }else {
            return back() -> with('fail', 'email Anda salah');
        }
    }

    public function out(){
        Session::has('userId');
        Session::pull('userId');
        return redirect('login');
    }
}
