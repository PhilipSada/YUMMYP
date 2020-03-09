<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view('admin/users/all');
    }
    public function create(){
        $roles = Role::all();

        return view('admin/users/create', [
            'roles'=>$roles
        ]);
    }
    public function store(){
        //request() gets the input value (name given to the input)
        $user = new User();
        $user->firstname = request('firstname');
        $user->lastname = request('lastname');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));
        $user->save();
        //roles() is the function name given to define the relationship in User.php (model)
        //attach method helps to insert records to an intermediate table that joins the models(in this case, role_user joins User and Role models)
        $user->roles()->attach(request('role_id'));

        return redirect('/admin/users');
    }
    public function edit(){
        return view('admin/users/edit');
    }
}
