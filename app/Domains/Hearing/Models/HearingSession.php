<?php
namespace App\Domains\Hearing\Models;

use Illuminate\Database\Eloquent\Model;

class HearingSession extends Model
{
    protected $fillable = [
        'case_id',
        'date',
        'time',
        'description',
        'result',
        'official',
        'created_at',
        'updatedd_at'
    ];

}
