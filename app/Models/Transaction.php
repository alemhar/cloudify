<?php

namespace App\Models;

use App\Models\Item;
use App\Models\User;
use App\Models\Company;
use Illuminate\Support\Str;
use App\Models\TransactionItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
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
    
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function recipient()
    {
        return $this->belongsTo(Company::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->belongsToMany(Item::class)->withPivot('quantity', 'price', 'total');
    }

    public function TransactionItems()
    {
        return $this->hasMany(TransactionItem::class);
    }
}
