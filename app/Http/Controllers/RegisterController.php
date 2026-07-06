<?php

namespace App\Http\Controllers;

use App\Models\SocialAccounts;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('public_pages.register');
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
        // 'فحص البريد الالكتروني 
        // لو كان المستخدم مسجل باحد التطبيقات يظهر له خطا ويظهر له التطبيقات التي تم التسجيل بيها للتذكير '
        $email = $request->email ;
        $user = User::where('email', $email)->first();
        if($user){
        $providers = SocialAccounts::where('user_id' , $user->id)->pluck('provider_name')->implode(' , ');
            return redirect()->back()->withErrors(['error' => 'البريد الالكتروني مسجل بالفعل بالتطبيقات '. $providers]);
        }
        
        $request->validate([
            'name'=>'required|min:3|string|max:30',
            'email'=>'required|email|unique:users,email',
            'phone'=>'required|string|max:11|min:1|unique:users,phone',
            'password'=>'required|string|min:8|max:12|confirmed'
        ]);
        $user= User::create([
            'name'=> $request->name ,
            'email'=> $request->email ,
            'phone'=> $request->phone ,
            'password'=> Hash::make($request->password) 
        ]);

        Auth::login($user);
        $request->session()->regenerate();

        return redirect()->route('student_dashboard');

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
    public function destroy(string $id)
    {
        //
    }
}
