<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hash;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    public function index(){
        return view('dashboard.profile.index');
    }
    public function update(Request $request){
        try{
            $user = auth()->user();
            $this->validate($request, [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
            ], [
                'name.required' => 'Nama harus diisi',
                'email.required' => 'Email harus diisi',
                'email.unique' => 'Email sudah terdaftar',
            ]);
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
    public function lists(){
        $users = DB::table('users')->where('id', '!=', Auth::user()->id)->get();
        return view('dashboard.profile.users', compact('users'));
    }
    public function updateStatus(Request $request, $id){
        try{
            $user = User::find($id);
            if($user->status == 'active')
                $user->status = 'inactive';
            else
                $user->status = 'active';
            $user->save();
            return redirect()->route('user.lists')->with('success', 'Data updated successfully.');
        } catch (\Exception $e){
            return redirect()->route('user.lists')->with('error', $e->getMessage());
        }
    }
    public function create(){
        return view('dashboard.profile.create');
    }
    public function store(Request $request){
        try{
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email|unique:users',
            ], [
                'name.required' => 'Name is required.',
                'email.required' => 'Email is required.',
                'email.email' => 'Email is invalid.',
                'email.unique' => 'Email already exists.',
            ]);
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $pass = str_random(12);
            $user->password = bcrypt($pass);
            $user->save();
            return redirect()->route('user.lists')->with('success', 'Registered with default password '.$pass.'.');
        } catch (\Exception $e){
            return redirect()->route('user.lists')->with('error', $e->getMessage());
        }
    }

}
