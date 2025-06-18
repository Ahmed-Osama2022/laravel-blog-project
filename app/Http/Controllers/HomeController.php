<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    /**
     * This will be a home page for all visitors
     * Guests
     * Signed users
     * Beacuse of this => we'll disable the middleware and bring all of the posts
     */
    // $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
    /**
     * This will be a home page for all visitors
     * Guests
     * Signed users
     * Beacuse of this => we'll disable the middleware and bring all of the posts
     */

    // $posts = Post::all(); // This for all people ; BUG:
    // $posts = Post::with(['comments', 'user'])->get(); // OLD without paginate
    $posts = Post::with(['comments', 'user'])->paginate(10);

    return view('home', compact('posts'));
  }

  // public function getPost($post_id)
  // {
  //   // dd($id);
  //   $post = Post::find($post_id);
  //   // dd($post);

  //   return view('post', compact('post'));
  // }

  /**
   * NOTE:
   * Or alternative
   * Using the '07. Route model binding' Concept;
   * Laravel has the ability to detect if this is an ID or a model.
   */
  public function getPost(Post $post)
  {
    // $post = Post::find($post);

    return view('post', compact('post'));
  }

  public function about(Request $request)
  {
    // $post = Post::find($post);
    return view('about');
  }

  public function contact(Request $request)
  {
    return view('contact');
  }
}
