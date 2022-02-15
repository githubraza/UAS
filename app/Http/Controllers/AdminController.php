<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller{
    public function index(){
        $data = User::all();
        return view('admin.accountMaintenance', ['data' => $data]);
    }
    public function delete_user($id){
        $data = User::where('id', $id)->first();
        $data->delete();
        return redirect()->back();
    }
    public function update_index($id){
        $data = User::where('id', $id)->get();
        return view('admin.updateAccount', ['data' => $data]);
    }
    public function update($id, Request $request){
        $data = User::find($id);
        $data->role_id = $request->role;
        $data->save();
        return redirect('/account/maintenance');
    }

}
