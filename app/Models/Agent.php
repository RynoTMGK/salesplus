<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Agent extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'users';

    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
