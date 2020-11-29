<?php

namespace App\Http\Controllers;
use App\Model\Post;
use App\Model\Comment;

class PostController extends Controller
{
	function index()
{
    $posts = Post::orderBy('created_at', 'DESC')->paginate(10);
    return view('welcome', compact('posts'));
}
	function show($slug)
{
    $post = Post::with(['comments', 'comments.child'])->where('slug', $slug)->first();
    return view('show', compact('post'));
}
	function comments()
{
    return $this->hasMany(Comment::class)->whereNull('parent_id');
}
	function comment(Request $request)
{
    //VALIDASI DATA YANG DITERIMA
    $this->validate($request, [
        'username' => 'required',
        'comment' => 'required'
    ]);

    Comment::create([
        'post_id' => $request->id,
        //JIKA PARENT ID TIDAK KOSONG, MAKA AKAN DISIMPAN IDNYA, SELAIN ITU NULL
        'parent_id' => $request->parent_id != '' ? $request->parent_id:NULL,
        'username' => $request->username,
        'comment' => $request->comment
    ]);
    return redirect()->back()->with(['success' => 'Komentar Ditambahkan']);
}
}