<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('public_pages.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $check_user = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);



        if (Auth::attempt($check_user)) {
            $request->session()->regenerate();

            if (Auth::user()->role == 'admin') {
                //                                 URL Page
                return redirect()->intended('admin-dashboard');

            } elseif (Auth::user()->role == 'instructor') {
                //                                 URL Page
                return redirect()->intended('instructor-dashboard');

            } elseif (Auth::user()->role == 'student') {
                //                                 URL Page
                return redirect()->intended('student-dashboard');

            }
        }else{
            return redirect()->back()->withErrors(['error' => 'البريد الالكتروني او كلمة المرور غير صحيحة']);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Auth::logout();
        // delete session 
        $request->session()->invalidate();
        // regenerate Token CSRF
        $request->session()->regenerateToken();
        return redirect()->route('home_page');
    }
}
