<?php

namespace App\Http\Controllers\admin;

use App\Enums\Role;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Enum;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users' , compact('users'));
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
        $request->validate([
            'name'=>'required|string|min:10',
            'email'=>'required|email|unique:users,email',
            'role'=>'required',[new Enum(Role::class)],
            'password'=>'required|string|min:8|max:15',
        ]);

        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'role'=> $request->role,
            'password'=> Hash::make($request->password) ,
        ]);

        return redirect()->route('admin_users')->with(['success'=>'add user successfully']);
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
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin_users')->with(['success'=>'deleted user successfully']);

    }
}
