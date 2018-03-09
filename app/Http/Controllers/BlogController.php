<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;

class BlogController extends Controller
{

	public function index() {

    	$posts = Post::orderBy('id', 'desc')->paginate(3);

    	return view('blog.index')->withPosts($posts);


    }
    public function getSingle($slug) {

    	$post = Post::where('slug', '=', $slug)->first();

    	return view('blog.single')->withPost($post);


    }
}
