<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'number_pages', 'retail_price', 'reading_difficulty_rating', 'year_published', 'is_best_seller'];

    public function authors(): BelongsToMany
    {
        return $this->belongstoMany(Author::class)->withTimestamps();
    }
}
