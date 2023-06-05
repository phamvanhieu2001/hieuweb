<?php

namespace App\Http\Controllers\API;

use App\Http\Resources\PostResource;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostCollection;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class Postcontroller extends Controller
{

    protected $post;

    public function __construct(Post $post)

    {
        $this->post = $post;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = $this->post->paginate(5);

        $postCollection = new PostCollection($posts);


        return response()->json([
            'data' => $postCollection
        ], Response::HTTP_OK);        
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
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
