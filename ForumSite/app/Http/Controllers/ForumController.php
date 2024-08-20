<?php

namespace App\Http\Controllers;

use App\Models\ForumPosts;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $forum_posts = ForumPosts::query()->orderBy("created_at","desc"); //not working
        // $forum_posts = ForumPosts::all(); // same thing as the query() -> get() ???
        $forum_posts = ForumPosts::query()->get();
        // return view("forum.index", ['posts' => 'Forph2p']); // need data here aswell
        // return view("forum.index", ['posts' => ForumPosts::all()]);

        return view("forum.index", ['posts' => $forum_posts]);
        // return dd($forum_posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("forum.create_post");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ForumPosts $forum)
    {
        // return view("forum.selected_post", ['forum_post' => $forum]);
        ECHO $forum;
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ForumPosts $forum)
    {
        return view("forum.edit_post", ['forum_post' => $forum]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ForumPosts $forum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ForumPosts $forum)
    {
        //
    }
}
