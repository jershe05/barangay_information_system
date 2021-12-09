<?php
namespace App\Domains\Indigent\Models;

use App\Domains\Person\Models\Person;
use Illuminate\Database\Eloquent\Model;

class Indigent extends Model
{
    protected $fillable = [
        'person_id',
        'description',
        'created_at',
        'updated_at'
    ];

    public function person()
    {
        return $this->hasOne(Person::class);
    }
}
