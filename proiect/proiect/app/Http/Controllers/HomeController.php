<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         $user_id = auth()->user()->id;
         $user= User::find($user_id);
         return view('/home')->with('posts',$user->posts);
    }

    public function index2()
    {
         $user_id = auth()->user()->id;
         $user= User::find($user_id);
         return view('/home2')->with('user',$user)->with('posts',$user->posts);
    }
    
    public function update(Request $request)
	{
            
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required']);
    
            $date=User::find(auth()->user()->id);
            $date->name =$request->input('name');
            $date->email =$request->input('email');
            $date->save();
            return redirect('/home2');
	}
    public function index3()
	{
        $user = User::orderBy('name','desc')->paginate();
        return view('homeindex')->with('user',$user);
	}

    public function show($id)
	{
       $date= User::find($id);
       return view('/home3')->with('date',$date);
	}

    
    public function destroy($id)
	{  $user = User::find($id);
        $user->delete();
        return redirect('/homeindex')->with('success', 'utilizator a fost sters');
	}
    
}
