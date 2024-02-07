<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class GeneratePublicToken extends Controller
{
    public static function generate() {
        $publicUser = User::where("email","=", "userpublic@gmail.com")->first();

        return Cache::remember('public_access_token', now()->addHours(24), function () use ($publicUser) {
            return $publicUser->createToken('public-access-token')->plainTextToken;
        });

        return $publicUser;
    }
}
