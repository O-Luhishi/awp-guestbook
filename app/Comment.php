<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function upvoteAndSave () {
        $this -> likes += 1;
        $this -> update ();
    }
    public function downvoteAndSave () {
        $this -> likes -= 1;
        $this -> update ();
    }
}
