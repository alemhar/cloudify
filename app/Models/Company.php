<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'name',
        'account_type',
        'address1',
        'address2',
        'city',
        'contact_name',
        'contact_phone',
        'contact_email',
        'contact_position',
        'country',
        'website',
        'logo',
        'subscribe'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = (string) Str::uuid();
        });
    }

}
