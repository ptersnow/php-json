<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;

class CommentController extends Controller {

  public function index() {
    $comments = Comment::all();
    return response()->json($comments);
  }

  public function create(Request $request) {
    $comment = new Comment;
    $comment->content = $request->content;
    $comment->post_id = $request->post_id;
    $comment->user_id = $request->user_id;
    $comment->save();
    return response()->json($comment);
  }

  public function show($id) {
    $comment = Comment::find($id);
    return response()->json($comment);
  }

  public function update(Request $request, $id) {
    $comment= Comment::find($id);

    $comment->content = $request->input('content');
    $comment->post_id = $request->input('post_id');
    $comment->user_id = $request->input('user_id');
    $comment->save();
    return response()->json($comment);
  }

  public function destroy($id) {
    $comment = Comment::find($id);
    $comment->delete();
    return response()->json('product removed successfully');
  }
}
