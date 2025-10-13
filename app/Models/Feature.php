<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Feature extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'feature',
        'price_id',
        'status'
    ];


    public function price() {
        return $this->belongsTo(Price::class, 'price_id');
    }
}
