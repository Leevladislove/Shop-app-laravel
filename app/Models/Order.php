<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    const STATE_CURRENT = 1;
    const STATE_PROCESSED = 2;
    protected $table = "orders"; 

    protected $fillable = ['user_id', 'state'];

    private static $currentOrder = false;

    public function goods()
    {
        return $this->belongsToMany(
            Good::class,
            'order_goods',
            'order_id',
            'good_id',
        );
    }

    public function getSum(): int 
    {
        $sum = 0;

        foreach($this->goods as $good) {
            $sum += $good->price;
        }

        return (int) $sum;
    }

    public static function getCurrentOrder(int $id)
    {   
        if(self::$currentOrder === false) {
            self::$currentOrder = self::query()
            ->where('user_id', $id)
            ->where('state', Order::STATE_CURRENT)
            ->first();
        }

        return self::$currentOrder;
    }

    public function saveAsProcessed()
    {
        $this->state = self::STATE_PROCESSED;
        return $this->save();
    }
}
