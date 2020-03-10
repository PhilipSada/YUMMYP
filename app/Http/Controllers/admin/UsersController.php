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
        $users = User::paginate(10);
        return view('admin/users/all', [
            'users'=>$users
        ]);
    }
    public function create(){
        $roles = Role::all();

        return view('admin/users/create', [
            'roles'=>$roles
        ]);
    }
    public function store(){
        request()->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role_id' => ['required'],
        ]);
        
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
    public function edit($id){
        $user = User::find($id);
        $roles = Role::all();
        return view('admin/users/edit', [
            'user'=>$user,
            'roles'=>$roles
        ]);
    }
    public function update($id){
      request()->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role_id' => ['required'],
        ]);
       
        $user = User::find($id);
        $user->firstname = request('firstname');
        $user->lastname = request('lastname');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));
        $user->save();

        //sync works like the attach method but it's used here to drop any other relationship the user might have as he/she changes roles
        $user->roles()->sync([request('role_id')]);

        return redirect('/admin/users');
    }
    public function delete($id){
        $user = User::find($id);
        $user->delete();

        return redirect('/admin/users');
    }
}
