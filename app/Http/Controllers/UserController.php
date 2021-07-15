<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
class UserController extends Controller
{
    public function index(){
        $user=auth()->user();

return view('users.index',compact('user'));


    }
    public function create(){

        return view('users.create');
    }

    public function store(Request $request){


        request()->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);



        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'parent_id' =>auth()->user()->id,
            'company_id' =>auth()->user()->company_id,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));
return redirect()->route('users.index');
    }
}
