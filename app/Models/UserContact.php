<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserContact
 *
 * @mixin \Eloquent
 * @property int $id
 * @property int $user_id
 * @property int $number
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserContact whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserContact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserContact whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserContact whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserContact whereUserId($value)
 */
class UserContact extends Model
{
    //
}
