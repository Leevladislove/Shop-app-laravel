<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Good
 * @package App
 * 
 * @property-read $id
 * @property-read $title
 * @property-read $description
 * @property-read $price
 * @property-read Category $category
 */

class Good extends Model
{
    use HasFactory;

    protected $table = 'goods';

    public function getImageId()
    {
        return $this->id % 9 + 1;
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
