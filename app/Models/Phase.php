<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Phase
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Payment[] $payments
 * @property-read \App\Models\Project $project
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $status
 * @property string $description
 * @property int $project_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Phase whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Phase whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Phase whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Phase whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Phase whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Phase whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Phase whereUpdatedAt($value)
 */
class Phase extends Model
{
    protected $guarded = ['id'];

    /**
     * Get the project that the phase belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

}
