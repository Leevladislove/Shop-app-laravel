<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Good extends Model
{
    use HasFactory;

    protected $table = 'goods';

    public function getImageId()
    {
        return $this->id % 9 + 1;
    }
}
