<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PenggunaController extends Controller
{
    public function index(){

        $users = User::all();
        return view('user.index',compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'username'   =>  'required',
            'Email'         =>  'required',
            'role'      => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('user.index');
    }

    public function destroy($id){

        $user = User::findOrFail($id);
        $username = $user->username;
        $user->delete();

        return redirect()->route('user.index')->with('users', $username . ' Data telah dihapus');
    }
}
