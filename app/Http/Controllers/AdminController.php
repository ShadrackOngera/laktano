<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminHome(){
        //
        return view('admin.admin');
    }

    public function allUsers(){
        //
        $users = User::paginate(20);
        return view('admin.users')->with('users', $users);
    }

    public function makeModerator(Request $request){

        $request->validate([
            'user_id' => 'required',
        ]);

        $userId = $request->input('user_id');
        $user = User::where('id', $userId)->first();
        $user->assignRole('admin');

        $msg = 'User Id '. $userId . ' Is now an Admin ';

        return redirect('/admin/users')->with('message', $msg);
    }

    public function makeClient(Request $request){

        $request->validate([
            'user_id' => 'required',
        ]);

        $userId = $request->input('user_id');
        $user = User::where('id', $userId)->first();
        $user->assignRole('client');

        $msg = 'User Id '. $userId . ' Has No Roles ';

        return redirect('/admin/users')->with('message', $msg);
    }
}
