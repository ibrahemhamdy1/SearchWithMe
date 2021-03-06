<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'name', 'age','description','adders','country', 'gnader','lost_relationship','image',
        'tags','cat_id','user_id'
    ];
    public  function  user(){
        
        return  $this->belongsTo('App\User');
        }

        public function categorie(){
            return  $this->belongsTo('App\Categorie','cat_id');
        }

}
