<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;

class GenericController extends Controller
{
    public function landing(Request $request)
    {
        return view('landing');
    }

    public function generateToken(Request $request)
    {
        //TODO: Verificar se o user é administrator

        $user = User::find(auth()->id());

        $token = $user->createToken($user->name . '\'s Token')->accessToken;

        dd($token);
    }
}
