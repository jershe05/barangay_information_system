<?php

namespace App\Domains\Blotter\Models;

use App\Domains\Hearing\Models\HearingSession;
use App\Domains\Suspect\Models\Suspect;
use Illuminate\Database\Eloquent\Model;

class Blotter extends Model
{
    protected $fillable = [
        'insident_address',
        'date',
        'time',
        'report',
        'updated_at'
    ];

    public function suspect()
    {
        return $this->hasMany(Suspect::class);
    }

    public function hearings()
    {
        return $this->hasMany(HearingSession::class, 'case_id', 'id');
    }
}
