<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = [
        'status', 'email'
    ];

    public function calcAmount(array $products): int
    {


        return 100500;
    }

}
