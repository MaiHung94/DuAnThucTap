<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $guarded = [];
    // một sản phẩm thì sẽ có nhiều hình ảnh
    
    public function menus()
    {
        return $this->belongsTo('App\Menu', 'category_id');
    }
}
