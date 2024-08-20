<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    
    protected $guarded = [];
    protected $table = 'posts';
    public function menus(){
        return $this->belongsTo('App\Menu', 'category_id');
    }
}
