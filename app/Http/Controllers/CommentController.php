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
    $comment->title = $request->title;
    //$comment->email = $request->email;
    //$comment->password = $request->password;
    $comment->save();
    return response()->json($comment);
  }

  public function show($id) {
    $comment = Comment::find($id);
    return response()->json($comment);
  }

  public function update(Request $request, $id) {
    $comment= Comment::find($id);

    $comment->title = $request->input('title');
    //$comment->email = $request->input('email');
    //$comment->password = $request->input('password');
    $comment->save();
    return response()->json($comment);
  }

  public function destroy($id) {
    $comment = Comment::find($id);
    $comment->delete();
    return response()->json('product removed successfully');
  }
}
