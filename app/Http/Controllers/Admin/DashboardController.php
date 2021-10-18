<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function registered()
    {
        $users = User::all();
        return view('admin.register')->with('users',$users);
    }

    public function registerededit(Request $request, $id)
    {
        $users = User::findOrFail($id);
        return view('admin.register-edit')->with('users',$users);
    }

    public function registeredupdate(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->input('name');
        $users->fathername = $request->input('fathername');
        $users->lastname = $request->input('lastname');
        $users->notification_number = $request->input('notification_number');
        $users->city = $request->input('city');
        $users->branch = $request->input('branch');
        $users->email = $request->input('email');
        $users->usertype = $request->input('usertype');
        $users->mobile = $request->input('mobile');
        $users->product = $request->input('product');
        $users->quantity = $request->input('quantity');
        $users->price = $request->input('price');
        $users->total = $request->input('total');
        $users->ready = $request->input('ready');
        $users->shipped = $request->input('shipped');
        $users->received = $request->input('received');
        
        $users->update();

        return redirect('/role-register')->with('status','تم تحديث البيانات');
}

public function registereddelete($id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        
        return redirect('/role-register')->with('status','تم حذف البيانات');
    }

}