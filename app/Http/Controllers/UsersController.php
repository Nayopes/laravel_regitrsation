<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller {

    public function createUser (Request $response) {
        dd($response->input('email'));
    }
}
