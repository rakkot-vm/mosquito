<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'attribute_id', 'title', 'price'
    ];

    public function attribute()
    {
        $this->belongsTo('Attributes');
    }
}
