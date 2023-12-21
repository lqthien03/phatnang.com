<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function edit($id)
    {
        $account = User::findOrFail($id);
        // dd($account);
        return view('admin.account', compact('account'));
    }

    public function update(Request $request, $id)
    {
        $account = User::findOrFail($id);
        $account->name = $request->input('name');
        $account->phone = $request->input('phone');
        $account->email = $request->input('email');
        $account->address = $request->input('address');
        $account->sex = $request->input('sex');
        $account->date = $request->input('date');

        $account->save();
        return back();
    }

    public function edit_password($id)
    {
        $account = User::findOrFail($id);
        return view('admin.update_password', compact('account'));
    }
    public function update_password(Request $request)
    {
        $request->validate([
            'old_password' => 'required|min:6|max:100',
            'new_password' => 'required|min:6|max:100',
            'confirm_password' => 'required|same:new_password',
        ]);
        $current_user = Auth()->user();
        // dd($current_user);
        if (Hash::check($request->old_password, $current_user->password)) {
            $current_user->update([
                'password' => bcrypt($request->new_password)
            ]);
            return back();
        } else {
            return back();
        }
    }
}
