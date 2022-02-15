<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function sign_up(Request $request){
        $file = $request->file('picture');
        $request->validate([
            'firstname' => 'required|max:25|alpha',
            'middlename' => 'max:25',
            'lastname' => 'required|max:25|alpha',
            'email' => 'required|email|unique:users,email',
            'role' => 'required',
            'password' => 'required|regex:"^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"',
            'gender' => 'required',
            'picture' => 'required|mimes:jpg,png,jpeg'
        ]);
        $img_name = time().'.'.$file->getClientOriginalExtension();
        Storage::putFileAs('public/img', $file, $img_name);
        $img_name = 'img/'.$img_name;

        $user = new User();
        $user->firstname = $request->firstname;
        $user->middlename = $request->middlename;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->role_id = $request->role;
        $user->gender_id = $request->gender;
        $user->password = Hash::make($request->password);
        $user->profile = $img_name;
        $user->save();

        return redirect('/');
    }
    public function log_in(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        $credential = $request->only('email', 'password');
        $user = User::where(['email'=>$request->email])->first();

        if(Auth::attempt($credential)){
            $request->session()->put('user', $user);
            Auth::login($user);
            return redirect('/home');
        }
        return redirect()->back()->withErrors([
            'errs' => "Credentials Doesn't Match Database"
        ]);
    }

    public function update_profile(Request $request){
        $user = User::find(Auth::user()->id);
        $file = $request->file('picture');

        $request->validate([
            'firstname' => 'required|max:25|alpha',
            'middlename' => 'max:25|alpha',
            'lastname' => 'required|max:25|alpha',
            'email' => 'required|email',
            'password' => 'required|regex:"^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"',
            'gender' => 'required',
        ]);

        if($file==null){
            $image_name = $user->profile;
        }
        else{
            $request->validate([
                'picture' => 'mimes:jpg,png,jpeg'
            ]);
            Storage::delete('public/'.$user->profile);
            $image_name = time().'.'.$file->getClientOriginalExtension();
            Storage::putFileAs('public/img', $file, $image_name);
            $image_name = 'img/'.$image_name;
        }

        $user->firstname = $request->firstname;
        $user->middlename = $request->middlename;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->gender_id = $request->gender;
        $user->password = Hash::make($request->password);
        $user->profile = $image_name;
        $user->save();

        return redirect()->back();
    }

    public function add_to_order($title){
        $book_data = Book::where('title', $title)->get();
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->book_id = $book_data[0]->id;
        $order->save();
        return redirect('/home');
    }
    public function get_order_data(){
        $order = Order::where('user_id', Auth::user()->id)->get();
        return view('cart', ['data' => $order]);
    }
    public function delete_order($id){
        $data = Order::where('book_id', $id)->first();
        // echo $data;
        $data->delete();
        return redirect()->back();
    }

    public function submit_rent(){
        $data = Order::where('user_id', Auth::user()->id)->get();
        $data->each->delete();
        return view('submit');
    }

}
