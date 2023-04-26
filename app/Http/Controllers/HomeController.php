<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;

class HomeController extends Controller
{
    public function allPosts()
    {
        // abort_if(!isset(request()->query()['limit']), '404');

        return !isset(request()->query()['limit']) ? response()->json(['message' => 'Set a limit query parameter']) : view('posts.posts', ['posts' => BlogPost::all()->take((int) request()->query()['limit'])]);
    }

    public function singlePost($id)
    {
        return view('posts.post', ['post' => BlogPost::all()[$id]]);
    }

    public function home()
    {
        return response()->json(BlogPost::all());
    }

    public function get_courses()
    {

        if (request()->query()['course'] == 'all') {
            return redirect('/respons/json');
        }
        //  abort_if(BlogPost::findOrFail(request()->query()['course']) === null, 404);
        return response()->json(BlogPost::findOrFail(request()->query()['course']));

    }

}
