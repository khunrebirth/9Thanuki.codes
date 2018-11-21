<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function category() {
        return $this->hasOne('App\Category', 'id', 'category_id');
    }
}
