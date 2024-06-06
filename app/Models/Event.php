<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */

    protected $table = 'events';
    protected $fillable = ['id', 'nama_event', 'pelaksanaan', 'lokasi', 'map', 'description'];
}
