<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'code', 'name', 'status', 'price','original_price', 'short_description',
        'full_description', 'specifications', 'thumbnail', 'album', 'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
