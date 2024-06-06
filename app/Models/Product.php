<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */

    protected $table = 'products';
    protected $fillable = ['id', 'image', 'title', 'size', 'description', 'price', 'stock'];

    public function cart()
    {
        return $this->hasMany(Cart::class) ;
    }
}
