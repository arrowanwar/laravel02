<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function create() {
        $data = [
            'name' =>'anwar',
            'email' => 'arr@g.com',
            'password' => '1234'
        ];
        User::create($data);
        return 'Created';
    }
}
