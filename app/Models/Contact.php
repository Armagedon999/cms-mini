<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'client_id',
        'phone',
        'email',
        'address',
        'google_maps',
    ];
    public function client() { return $this->belongsTo(Client::class); }
}
