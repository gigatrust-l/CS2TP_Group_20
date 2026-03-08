<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        $home = match(true) {
            $request->user()->isAdmin() => '/portal',
            default                    => '/',
        };

        return redirect()->intended($home);
    }
}