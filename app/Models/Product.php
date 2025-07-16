<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'client_id',
        'name',
        'description',
        'price',
        'image',
    ];

    public function client() { return $this->belongsTo(Client::class); }
}
