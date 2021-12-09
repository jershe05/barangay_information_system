<?php
namespace App\Domains\Hearing\Models;

use App\Domains\Blotter\Models\Blotter;
use App\Domains\Official\Models\Official;
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
    public function assignedOfficial()
    {
        return $this->hasOne(Official::class, 'id', 'official');
    }

    public function blotter()
    {
        return $this->hasOne(Blotter::class, 'id', 'case_id');
    }
}
