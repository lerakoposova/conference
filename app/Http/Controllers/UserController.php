<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UserController extends Controller
{
    public function getDashboard(){
        $users = User::all();
        return view('dashboard', compact('users'));
    }

    public function edit(User $user){
        return view('edit',compact('user'));
    }

    public function update(User $user, Request $request){
        $data = $request->validate([
            'name'=>'required',
            'surname'=>'required',
            'gender'=>'required',
            'nationality'=>'required',
            'name_of_the_organization'=>'required',
            'job_title'=>'required',
            'date_of_birth'=>'required|date',
            'email'=>'required|email',
            'password'=>'required|integer|min:8',
        ]);
        $user->update($data);
        return redirect('dashboard');
    }

    public function delete(User $user){
        $user->delete();
        return redirect('/');
    }
}
