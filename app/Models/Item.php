<?php

namespace App\Models;

use App\Models\Company;
use App\Models\Category;
use App\Models\Transaction;
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

    public function transactions()
    {
        return $this->belongsToMany(Transaction::class)->withPivot('quantity', 'price', 'total');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    
}
