<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Hash;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function register()
    {

        $title="Register SDA";
        $role = DB::table('role_type_users')->get();
        return view('auth.register',compact('role','title'));
    }
    public function storeUser(Request $request)
    {
        $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:users',
            // 'role_name' => 'required|string|max:255',
            'password'  => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);

        $dt       = Carbon::now();
        $todayDate = $dt->toDayDateTimeString();
        
        User::create([
            'name'      => $request->name,
            'username'  => $request->username,
            'avatar'    => $request->image,
            'email'     => $request->email,
            'join_date' => $todayDate,
            'role_name' => 2,
            'status'    => 'Active',
            'password'  => Hash::make($request->password),
            'phone_number'  => $request->no_telepon
        ]);
        Toastr::success('Create new account successfully :)','Success');
        return redirect('login');
    }
}
