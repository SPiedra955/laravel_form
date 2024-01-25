<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        // Access from the root 
        return view("user.index",compact('users'));
    }

    public function create(){
        $user = new User;
        $user->name = 'Samu';
        $user->email = 'samu@demo.com';
        $user->password = Hash::make('123456');
        $user->age = 25;
        $user->address = 'prueba 25';
        $user->zip_code = 07011;
        $user->save();

        User::create([
            "name" => "prueba",
            "email" => "prueba@gmail.com",
            "password"=> Hash::make("1256353"),
            "age" => 52,
            "address" => 'El prepucio',
            "zip_code" => 07012
        ]);
        // access from the route name
        return redirect()->route('index');
    }
}
