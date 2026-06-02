<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AssetReturns;

class Asset extends Model
{
    protected $fillable = [
    'category_id',
    'name',
    'code',
    'total_qty',
    'good_qty',
    'damaged_qty',
    'lost_qty',
    'borrowed_qty',
    'is_available',
    'image',
    'description',
    'purchase_price',
    'purchase_year',
    'purchase_source'
];

public function category()
{
    return $this->belongsTo(Category::class);
}

public function tickets()
{
    return $this->hasMany(Ticket::class);
}

public function assetReturns()
    {
        return $this->hasMany(AssetReturns::class);
    }

}
