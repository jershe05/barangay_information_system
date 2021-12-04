<?php
namespace App\Domains\Official\Models;

use App\Domains\Person\Models\Traits\Relationships\hasSuspects;
use Illuminate\Database\Eloquent\Model;

class Official extends Model
{
    protected $fillable = [
        'person_id',
        'position',
    ];
}
