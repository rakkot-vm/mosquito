<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id', 'title',
    ];

    public function product()
    {
        $this->belongsTo('Product');
    }

    public function attributeValues()
    {
        return $this->hasMany('App\AttributeValue');
    }
}
