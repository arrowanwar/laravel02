<?php

namespace App\Http\Controllers;

use App\Models\User;
class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return $users;
    }
    public function show($id) {
        $user = User::find($id);
        return $user;
    }
    public function create() {
        $data = [
            'name' =>'azima',
            'email' => 'azima@g.com',
            'password' => '1234'
        ];
        User::create($data);
        return 'Created';
    }
    public function delete($id) {
        $user = User::findOrFail($id);
        $user->delete();
        return 'Deleted';
    }
     public function edit($id) {
        $user = User::find($id);
        $user->name = 'New Name';
        $user->save();
        return 'Edited';
    }
}
