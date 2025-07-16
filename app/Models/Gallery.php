<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'client_id',
        'image',
        'caption',
    ];
    public function client() { return $this->belongsTo(Client::class); }
}
