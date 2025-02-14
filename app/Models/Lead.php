<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Lead extends Model
{
    protected $table = 'leads';
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'id_number',
        'email',
        'phone_number',
        'role',
        'street_address',
        'city',
        'postal_code',
        'province',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($lead) {
            if (empty($lead->id)) {
                $lead->id = Str::uuid();
            }
        });
    }
}
