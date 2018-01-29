<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Request
 *
 * @property int $id
 * @property int $project_id
 * @property int|null $hr_id
 * @property int|null $rm_id
 * @property string $request
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Request whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Request whereHrId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Request whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Request whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Request whereRequest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Request whereRmId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Request whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\Models\Project $project
 */
class Request extends Model
{
    protected $guarded = [
        'id'
    ];

    /**
     * Get the project that the request belongs to you.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
