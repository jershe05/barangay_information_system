<?php

namespace App\Domains\Blotter\Models;

use App\Domains\Suspect\Models\Suspect;
use Illuminate\Database\Eloquent\Model;

class Blotter extends Model
{
    protected $fillable = [
        'insident_address',
        'date',
        'report',
        'updated_at'
    ];

    public function suspect()
    {
        return $this->hasMany(Suspect::class);
    }
}
