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

        if (session()->has('checkout-redirect') ) {
            $home='/checkout/details';
        }

        session()->forget('checkout-redirect');

        return redirect()->intended($home);
    }
}