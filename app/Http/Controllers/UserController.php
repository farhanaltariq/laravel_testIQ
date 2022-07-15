<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hash;
class UserController extends Controller
{
    public function index(){
        return view('dashboard.profile.index');
    }
    public function update(Request $request){
        try{
            $user = auth()->user();
            if(!Hash::check($request->password, $user->password))
                return redirect()->back()->with('error', 'Wrong password.');
            if($request->newPassword){
                $this->validate($request, [
                    'newPassword' => 'required',
                    'verifyPassword' => 'required|same:newPassword'
                ], [
                    'newPassword.required' => 'New password is required.',
                    'verifyPassword.required' => 'Password confirmation is required.',
                    'verifyPassword.same' => 'Password confirmation does not match.'
                ]);
                $user->password = bcrypt($request->newPassword);
            }
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();
            return redirect()->route('user.index')->with('success', 'Data updated successfully.');
        } catch (\Exception $e){
            return redirect()->route('user.index')->with('error', $e->getMessage());
        }
    }
}
