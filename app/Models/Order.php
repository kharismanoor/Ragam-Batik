<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */

    protected $table = 'orders';
    protected $fillable = ['id', 'username', 'order_id','total_harga', 'qty', 'payment', 'alamat', 'no_hp', 'status', 'tanggal'];

    public function cart()
    {
        return $this->hasMany(Cart::class) ;
    }
}


