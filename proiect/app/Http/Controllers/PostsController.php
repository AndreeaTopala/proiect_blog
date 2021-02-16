<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except'=>['index','show']]);
    }


    public function index()
	{
        //$posts = Post::orderBy('title','desc')->take(1)->get();
        //$posts = Post::all();
        $posts = Post::orderBy('subiect','desc')->paginate(10);
        return view('posts.index')->with('posts',$posts);
	}
    public function create()
	{
        return view('posts.create');
	}
    public function store(Request $request)
	{
        $this->validate($request,[
            'title'=>'required',
            'subiect'=>'required',
            'body'=>'required']);
            $post = new Post;
            $post->title =$request->input('title');
            $post->subiect =$request->input('subiect');
            $post->body =$request->input('body');
            $post->user_id =auth()->user()->id;
            $post->save();
            return redirect('/posts')->with('success','Articolul a fost adaugat cu succes');

	}
    public function edit($id)
	{
        $post = Post::find($id);

        if(auth()->user()->id !==$post->user_id){        
        return view('/posts')->with('error', 'Neautorizat');
        }
        return view('posts.edit')->with('post', $post);
        
	}
    public function update(Request $request, $id)
	{
        $this->validate($request,[
            'title'=>'required',
            'subiect'=>'required',
            'body'=>'required']);
            $post = Post::find($id);
            $post->title =$request->input('title');
            $post->subiect =$request->input('subiect');
            $post->body =$request->input('body');
            $post->save();
            return redirect('/posts')->with('success','Articolul a fost adaugat cu succes');
	}
    public function show($id)
	{
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
	}
    public function destroy($id)
	{
        $post = Post::find($id);
        $post->delete();
        return redirect('/posts')->with('success', 'Articol sters cu succes');
	}
}
