<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;

class PostsController extends Controller
{
	// ROUTING TO THE CONTROLLER
	public function show($slug) {

		// Hello Eloquent and Database connection

		$post = Post::where('slug', $slug)->firstOrFail();

		// $post = DB::table('posts')->where('slug', $slug)->first();

			  // $posts = [
				// 	'my-first-post' => 'This is my first blog post!',
				// 	'my-second-post' => 'This is my second blog post!'
				// ];

				// if(! $post){
				// 	abort('404');
				// }
			
				// if(! array_key_exists($post, $slug)){
				// 	abort(404, 'This page does not exist, try again');
				// }
			
				return view('post', [
					'post' => $post
				]);
		   
	}
}
