<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'price', 'docName'
    ];

    public function attributes()
    {
        return $this->hasMany('App\Attribute')->with('attributeValues');
    }
}
