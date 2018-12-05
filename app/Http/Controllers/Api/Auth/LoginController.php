<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Dingo\Api\Routing\Helpers;

class LoginController extends Controller
{
    use Helpers;
    public function login()
    {
        return $this->response->array([
            'token' => 'aaa',
            'status_code' => 200,
            'message' => 'User Authenticated',
        ]);
    }
}
