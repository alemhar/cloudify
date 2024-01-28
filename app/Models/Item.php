<?php

namespace App\Models;

use App\Models\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'description',
        'sku',
        'model',
        'barcode',
        'image',
        'thumbnail',
        'price',
        'cost',
        'quantity',
        'weight',
        'length',
        'width',
        'height',
        'active',
        'category_id',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
