<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'date_of_birth', 'birth_state'];

    public function books(): BelongsToMany
    {
        return $this->belongstoMany(Book::class)->withTimestamps();;
    }
}
