<?php

namespace App\Domains\Person\Models\Traits\Relationships;

use App\Domains\Suspect\Models\Suspect;

/**
 * Class PermissionRelationship.
 */
trait hasSuspects
{
    /**
     * @return mixed
     */
    public function suspects()
    {
        return $this->hasMany(Suspect::class);
    }

}
