<?php

namespace App\Http\Controllers;

use App\Models\UserConroller;
use Illuminate\Http\Request;

class UserConrollerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('Users'));
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
        
    }

    /**
     * Display the specified resource.
     */
    public function show(UserConroller $userConroller)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserConroller $userConroller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserConroller $userConroller)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserConroller $userConroller)
    {
        $user = User::find ($id);
        $user->delete();
        return redirect()->back();
    }
}
