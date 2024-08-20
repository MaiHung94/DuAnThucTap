<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use PhpParser\Node\Stmt\Return_;

class Product extends Model
{
    protected $guarded = [];
    // một sản phẩm thì sẽ có nhiều hình ảnh
    
    public function menus()
    {
        return $this->belongsTo('App\Menu', 'category_id');
    }
    
}
