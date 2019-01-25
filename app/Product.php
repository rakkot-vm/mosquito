<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'img', 'price',
    ];

    public function attributes()
    {
        return $this->hasMany('App\Attribute');
    }
}
