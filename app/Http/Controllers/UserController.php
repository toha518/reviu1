<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('user', [
            "Users" => User::all()
        ]);
    }

    // public function save(Request $request)
    // {
    //     // Process and save the updated data here
    //     $request->input('user'); //will contain the updated data


    //     // Redirect back to the table page
    //     return redirect('/user');
    // }

    public function update(Request $request)
    {
        // Process and save the updated table data here

        // Return a response indicating success or failure
        return response()->json(['status' => 'success']);
    }
}
