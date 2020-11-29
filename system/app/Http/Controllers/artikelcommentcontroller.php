<?php 

namespace App\Http\Controllers;
use App\Models\Artikel;
use App\Models\Comment;

class artikelcommentcontroller extends Controller{

	function index()
{
    $posts = Post::orderBy('created_at', 'DESC')->paginate(10);
    return view('welcome', compact('posts'));
}