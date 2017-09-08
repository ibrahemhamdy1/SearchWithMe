<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public  function  user(){
        
        return  $this->belongsTo('App\User');
        }

        public function categotie(){
            return  $this->belongsTo('App\Categorie');
        }

}
