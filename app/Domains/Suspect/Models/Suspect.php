<?php
namespace App\Domains\Suspect\Models;

use App\Domains\Blotter\Models\Blotter;
use App\Domains\Person\Models\Person;
use Illuminate\Database\Eloquent\Model;

class Suspect extends Model
{
    protected $table = 'suspects';
    protected $fillable = [
        'blotter_id',
        'person_id',
        'description',
        'created_at',
        'updated_at'
    ];

    public function blotter()
    {
        return $this->belongsToMany(Blotter::class);
    }

    public function person()
    {
        return $this->hasOne(Person::class);
    }
}
