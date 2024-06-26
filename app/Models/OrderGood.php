<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderGood extends Model
{
    use HasFactory;

    protected $table = "order_goods";

    protected $fillable = ['order_id', 'good_id'];
}
