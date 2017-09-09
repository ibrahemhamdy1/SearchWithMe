<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['comment', 'post_id', 'user_id'];
    public  function psot(){
        return $this->belongsTo('App\Post');
    }
}
