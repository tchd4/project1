<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $Per_page = 10;
    public function index(Request $request) {
        return PostResource::collection(Post::paginate( $request->input('per_page') ?? $this->Per_page ));
    }

    public function store(PostRequest $request)
    {
        return PostResource::make(Post::create($request->validated()));
    }

    public function show(Post $post) {
        return PostResource::make($post);
    }
}
