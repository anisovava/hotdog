<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $table = 'food'; // Явное указание имени таблицы
    protected $fillable = ['name', 'sostav', 'weight', 'price', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
