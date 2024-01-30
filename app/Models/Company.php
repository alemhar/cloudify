<?php

namespace App\Models;

use App\Models\Item;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;

    public $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = (string) Str::uuid();
        });
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }
    
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }


    public function partners()
    {
        return $this->belongsToMany(Company::class, 'company_partners', 'company_id', 'partner_id');
    }

    // public function getRouteKeyName()
    // {
    //     return 'uuid';
    // }


}
