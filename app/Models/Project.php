<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = ['id'];

    /**
     * Get all the phases that a project has.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function phases()
    {
        return $this->hasMany(Phase::class);
    }
}
