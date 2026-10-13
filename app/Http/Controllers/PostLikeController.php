<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Mail;
use App\Mail\PostLiked;

class PostLikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  

    /**
     * Store a newly created resource in storage.
     */
    public function store(Post $post, Request $request)
    {
        
        $alreadyLiked = $post->likedBy($request->user());

        if ($alreadyLiked){
           return response(null, 409);
        }

        $post->likes()->create([
            'user_id' => $request->user()->id
        ]);

      
        Mail::to($post->user)->send(new PostLiked(auth()->user(), $post));

        return back();
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post, Request $request)
    {
       $request->user()->likes()->where('post_id', $post->id)->delete();

       return back();
    }
}
