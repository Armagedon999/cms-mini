<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    protected $fillable = [
        'client_id',
        'description',
        'photo',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
