<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    //
    public function index(){

        $posts = Post::latest()->get ();


        return view('posts.index', compact('posts'));
    }

    // show
    public function show(Post $post){

//        $post = Post::find($id);

        return view('posts.show', compact('post'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request) {

        if($request->method() == 'POST') {

            //Validate Post
            $this->validate($request, [

                'title' => 'required',
                'body' => 'required'
            ]);

            // Create a new Post

//            try {

                // Add post
            $post = new Post();
            Log::channel('daily')->info('new post model object created');
            $post->title = $request->title;
            $post->body = $request->body;
            $post->save();
//            Log::channel('daily')->info('new post added');

                return redirect()->route('index');
//            } catch (Exception $e) {
//                Log::channel('daily')->error("Error adding post object");
//
//            }
        }


        return view('posts.create');

    }


}

