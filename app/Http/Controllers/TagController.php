<?php

namespace App\Http\Controllers;


use \Illuminate\Http\Request;
use \DB;
use \App\Models\Tag;
// use \App\Models\Videogame;
// use \App\Models\Platform;

class TagController extends Controller {
    //
    public function tags() {

        $tags = Tag::all();

        return view('tags', [
            'tags' => $tags
        ]);
    }

    public function quiz($tagId) {

        $tag = Tag::find($tagId);

        return view('viande', [
            'tag' => $tag
        ]);
    }
}