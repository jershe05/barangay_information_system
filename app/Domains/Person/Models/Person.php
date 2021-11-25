<?php
namespace App\Domains\Person\Models;

use App\Domains\Person\Models\Traits\Relationships\hasSuspects;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use hasSuspects;
    protected $table = 'people';
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'address',
        'phone',
        'work',
        'alias',
        'gender',
        'birthdate',
        'type',
        'updated_at',
        'created_at'
    ];
}
