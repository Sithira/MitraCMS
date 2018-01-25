<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserSkill
 *
 * @mixin \Eloquent
 * @property int $id
 * @property int $user_id
 * @property string $skill
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserSkill whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserSkill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserSkill whereSkill($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserSkill whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserSkill whereUserId($value)
 */
class UserSkill extends Model
{
    //
}
