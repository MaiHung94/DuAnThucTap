<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $guarded = [];
    protected $table = 'menus';
    public function posts(){
        return $this->hasMany(
            'App\Post'
        );
    }
    public function page(){
        return $this->hasMany(
            'App\Page'
        );
    }
    public function menuChildren(){
        return $this->hasMany('App\Menu','menu_id');
    }
}
