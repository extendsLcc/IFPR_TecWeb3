<?php

namespace App\Models;

use App\Helpers\Currency;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'category_id',
    ];

    protected $appends = [
        'price_in_reais'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getPriceInReaisAttribute(): string
    {
        return number_format(Currency::convertCentsToReais($this->price), 2);
    }

}
