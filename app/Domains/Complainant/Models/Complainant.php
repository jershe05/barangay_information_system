<?php
namespace App\Domains\Complainant\Models;

use Illuminate\Database\Eloquent\Model;

class Complainant extends Model
{
    protected $table = 'complainants_list';
    protected $fillable = [
        'blotter_id',
        'person_id',
    ];
}
