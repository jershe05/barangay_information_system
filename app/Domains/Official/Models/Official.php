<?php
namespace App\Domains\Official\Models;

use App\Domains\Person\Models\Person;
use App\Domains\Person\Models\Traits\Relationships\hasSuspects;
use Illuminate\Database\Eloquent\Model;

class Official extends Model
{
    protected $fillable = [
        'person_id',
        'position',
    ];

    public function person()
    {
        return $this->belongsTo(Person::class, 'person_id', 'id');
    }
}

