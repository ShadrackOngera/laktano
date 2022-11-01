<?php

namespace App\Http\Controllers;

use App\Models\Mailing;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminHome(){
        //
        return view('admin.admin');
    }

    public function allUsers(){
        //
        $users = User::paginate(20)->except('id', 1);;
        return view('admin.users')->with('users', $users);
    }

    public function mailing(){
        //
        $mails = Mailing::paginate(20);
        return view('admin.mails')->with('mails', $mails);
    }

    public function exportMails(){

        $mails = Mailing::paginate(50);
        $pdf = Pdf::loadView('admin.pdfMails',
            [
                'mails'=>$mails,
            ]);
        return $pdf->download('mails.pdf');
    }

    public function makeModerator(Request $request){

        $request->validate([
            'user_id' => 'required',
        ]);

        $userId = $request->input('user_id');
        $user = User::where('id', $userId)->first();
        $user->assignRole('moderator');

        $msg = 'User Id '. $userId . ' Is now a Moderator ';

        return redirect('/admin/users')->with('message', $msg);
    }

    public function makeAdmin(Request $request){

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

    public function destroy($id)
    {
        User::where('id', $id)->delete();

        return redirect()->back();
    }
}
