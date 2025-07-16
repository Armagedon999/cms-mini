<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'client_id',
        'name',
        'content',
        'photo',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
