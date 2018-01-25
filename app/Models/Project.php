<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Project
 *
 * @property-read \App\Models\Account $account
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Phase[] $phases
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $submission_date
 * @property string $received_date
 * @property string $description
 * @property int $account_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereReceivedDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereSubmissionDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereUpdatedAt($value)
 */
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

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
