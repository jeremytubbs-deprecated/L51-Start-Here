<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getPosts()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getPostsByYear($year)
    {
        dd("year");
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getPostsByMonth($year, $month)
    {
        dd($year . ' ' . $month);
    }

    /**
     * Display the specified resource.
     *
     * @return Response
     */
    public function showPost($slug)
    {
        dd("post");
    }

}
