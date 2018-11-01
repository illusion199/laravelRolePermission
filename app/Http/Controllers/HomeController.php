<?php

namespace App\Http\Controllers;

use App\User;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // direct permission
        /*
        $role = Role::create(['name' => 'writer']);
        $permission = Permission::create(['name' => 'write posts']);
        auth()->user()->givePermissionTo('write posts');
         */
        //return auth()->user()->getDirectPermissions();

        // vaia Role
        /* $role = Role::create(['name' => 'editor']);
        $permission = Permission::create(['name' => 'edit posts']);
        $role->givePermissionTo($permission);
        auth()->user()->assignRole('editor');
         */
        //return auth()->user()->getPermissionsViaRoles();

        //auth()->user()->givePermissionTo('edit posts');
        //auth()->user()->assignRole('editor');
        //return auth()->user()->permissions;
        //return user()->getAllPermissions();

        //$user = User::all();
        //return $user;
        //return $user->getPermissionsViaRoles();
        //return $permissions;

        //return $users = User::role('writer')->get();
        return $users = User::permission('edit posts')->get();

        return view('home');
    }
}
