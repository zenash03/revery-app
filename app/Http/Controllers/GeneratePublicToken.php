<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;

class GeneratePublicToken extends Controller
{
    public static function generate()
    {
        $publicUser = User::where("email", "=", "userpublic@gmail.com")->firstOrFail();

        // return $publicUser->tokens;
        $existingToken = $publicUser->tokens;
        // if ($existingToken){
        //     return $existingToken->first()->plainTextToken;
        // }

        // return $existingToken->plainTextToken;
        // dd($existingToken);
        // return $existingToken->isEmpty();
        // return $existingToken->first();

        if ($publicUser->tokens->first() == null) {
            Cache::forget('public_access_token');
        }
        // if ($publicUser->tokens->first() == null) {

        //     return $publicUser->createToken('public_access_token')->plainTextToken;
        //     // return $existingToken->plainTextToken;
        // }
        // return $publicUser->createToken('public-access-token')->plainTextToken;


        return Cache::remember('public_access_token', now()->addHours(24), function () use ($publicUser) {
            return $publicUser->createToken('public_access_token')->plainTextToken;
        });
    }
}
