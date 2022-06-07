<?php
namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LogoutResponse as LogoutReseponseContract;

class LogoutResponse implements LogoutResponseContract{

    public function toResponse($request)
    {
        return redirect('/login');
    }

}
