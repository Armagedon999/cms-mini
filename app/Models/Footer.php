<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $fillable = [
        'client_id',
        'copyright',
        'instagram',
        'tiktok',
    ];
    public function client() { return $this->belongsTo(Client::class); }
}
