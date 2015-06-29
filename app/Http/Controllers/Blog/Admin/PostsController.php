<?php

namespace App\Http\Controllers\Blog\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Category;
use App\Post;

class PostsController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Category::lists('name', 'id');
        return view('blog.admin.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        // create new post
        $post = new Post();
        $post->user_id = \Auth::user()->id;
        $post->slug = $request->get('title');
        $post->html = $request->get('markdown');
        $post->fill($request->all());
        $post->featured = $request->has('featured') ? 1 : 0;
        $post->save();

        return redirect()->to('admin');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Post $post)
    {
        $categories = Category::lists('name', 'id');
        return view('blog.admin.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, Post $post)
    {
        // update post
        $post->user_id = \Auth::user()->id;
        $post->slug = $request->get('title');
        $post->html = $request->get('markdown');
        $post->fill($request->all());
        $post->featured = $request->has('featured') ? 1 : 0;
        $post->save();
        return redirect()->to('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->to('admin');
    }
}
