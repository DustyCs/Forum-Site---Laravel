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
        return view("forum.index", ['posts' => 'Forphp']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create");
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
        return view("forum.selected_post");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ForumPosts $forum)
    {
        return view("edit");
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
