<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class PostsController extends Controller
{
    // Declare private variable
    private $rest_url;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Provided option so that rest api uri
        $this->rest_url = config('constants.rest-api-url');
    }
    // Listing all posts
    public function viewposts() 
    {
        $url = $this->rest_url . "/wp-json/wp/v2/posts?_embed";
        $json = json_decode(file_get_contents($url), true);
        //dd($json);
        return view('home', ['posts'=> $json]);
    }
    // Retrieve single post
    public function singlepost(Request $request, $post_id) 
    {
        $url = $this->rest_url . "/wp-json/wp/v2/posts/".$post_id."?_embed";
        $json = json_decode(file_get_contents($url), true);
        return view('post', ['post'=> $json]);
    }
}
