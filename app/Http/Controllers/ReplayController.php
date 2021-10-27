<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReplayResource;
use App\Models\Replay;
use Illuminate\Http\Request;

class ReplayController extends Controller
{
    public function index(Request $request) {
//        $parent_replays = Replay::parent()->with('replays');
//        $parent_replays_ids = $parent_replays->pluck('id');
//        $replays_Of_replays = Replay::whereIn('parent_id', $parent_replays_ids)->paginate(5);
//        return $parent_replays_ids->merge($replays_Of_replays);
        return ReplayResource::collection(Replay::parent()->get());
    }

    public function store(PostRequest $request)
    {
        return ReplayResource::make(Replay::create($request->validated()));
    }

    public function show(Replay $post) {
        return ReplayResource::make($post);
    }
}
