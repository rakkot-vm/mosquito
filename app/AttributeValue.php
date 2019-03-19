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
        'attribute_id', 'title', 'price', 'additional'
    ];

    public function getAdditionalAttribute($value)
    {
        return json_decode($value, true);
    }

    public function setAdditionalAttribute($value)
    {
        $this->attributes['additional'] = json_encode($value);
    }

    public function attribute()
    {
        $this->belongsTo('Attributes');
    }
}
