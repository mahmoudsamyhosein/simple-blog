<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\comment;
class commentscontroller extends Controller
{
    public function store(post $post){
        comment::create([
            "name"=>request("name"),
            "body"=>request("body"),
            "post_id"=>$post->id
        ]);
        return back();
    }
}
