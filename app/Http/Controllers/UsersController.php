<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersRequest;
use App\Models\Users;

use Carbon\Carbon;

class UsersController extends Controller {

    public function createUser (UsersRequest $response) {

        $user = new Users();
        $user->firstName = $response->input('firstName');
        $user->lastName = $response->input('lastName');
        $user->birthDate = Carbon::parse($response->input('birthDate'))->format('Y-m-d');
        $user->email = $response->input('email');
        $user->phone = $response->input('phone');
        $user->save();

        return redirect()->route('users')->with('success', 'The user is added successfully!');

    }

    public function allUsers () {
        return view('users', ['data' => Users::all()]);
    }
}
