<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $guarded = [
        'id'
    ];

    /**
     * Get the user belong to the payment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'employee_id');
    }

    /**
     * Get the resource manager who created the payment.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function resource_manager()
    {
        return $this->belongsTo(User::class, 'resource_manager_id');
    }

    /**
     * Get the phase that payment belongs to
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function phase()
    {
        return $this->belongsTo(Phase::class);
    }


    public function getProjectAttribute()
    {
        return $this->phase->project;
    }

}
