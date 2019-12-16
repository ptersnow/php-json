<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller {

  public function index() {
    $posts = Post::with('user')->get();
    return response()->json($posts);
  }

  public function create(Request $request) {
    $post = new Post;
    $post->title = $request->title;
    $post->content = $request->content;
    $post->user_id = $request->user_id;
    $post->save();
    return response()->json($post);
  }

  public function show($id) {
    $post = Post::with('comments')->find($id);
    return response()->json($post);
  }

  public function update(Request $request, $id) {
    $post = Post::find($id);

    $post->title = $request->input('title');
    $post->content = $request->input('content');
    $post->user_id = $request->input('user_id');
    $post->save();
    return response()->json($post);
  }

  public function destroy($id) {
    $post = Post::find($id);
    $post->delete();
    return response()->json('product removed successfully');
  }
}
