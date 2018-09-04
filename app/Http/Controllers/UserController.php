<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\User;

class UserController extends Controller
{
    public function userList()
    {
        $userObj        = new User();
        $users          = $userObj->get();

        return view('backend.users.users', compact('users'));
    }

    public function postUser(Request $request)
    {
        $userObj        = new User();

        $validator = Validator::make($request->all(), [
            'email' => 'required|unique:users|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        else{
            $userObj->name          = $request->name;
            $userObj->email         = $request->email;
            $userObj->active        = $request->active;
            $userObj->role          = 'admin';

            $userObj->password      = bcrypt($request->password);

            $userObj->save();

            return redirect()->back()->with('message', 'User Created Successfully!');
        }
    }

    public function updateUser(Request $request)
    {
        $userObj    = new User();
        $user       = $userObj->find($request->userID);

        $validator = Validator::make($request->all(), [
            'email' => 'required|unique:users,email,'.$user->id,
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        else{
            $user->name          = $request->name;
            $user->email         = $request->email;
            $user->active        = $request->active;

            if($request->password){
                $user->password      = bcrypt($request->password);
            }
            $user->save();

            return redirect()->back()->with('message', 'User Updated Successfully!');
        }
    }

    public function deleteUser($id)
    {
        $userObj    = new User();
        $user       = $userObj->find($id);

        $user->delete();

        return redirect()->back()->with('message', 'User Deleted Successfully!');

    }

    public function getUserInfo(Request $request)
    {
        $dataObj      = new User();
        $data         = $dataObj->find($request->id);

        return response()->json($data);
    }



}
