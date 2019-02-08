<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributeValues extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'attribute_id', 'title', 'price', 'preview_img', 'border_img',
    ];

    public function attribute()
    {
        $this->belongsTo('Attributes');
    }
}
