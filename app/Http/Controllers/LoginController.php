<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\account;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $res)
    {
        $acc = $res->input('acc');
        $pw = $res->input('pw');

        $user = [
            'account' => $acc,
            'password' => $pw,
        ];

        if (Auth::attempt($user)) {
            dd(1);
        } else {
            dd(2);
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $account = account::first();
        dd($account);
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
        //
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
