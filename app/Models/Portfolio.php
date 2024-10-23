<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portfolio extends Model
{
    //
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'thumbnail',
        'content',
        'is_featured',
        'about_id',
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function about(): BelongsTo
    {
        return $this->belongsTo(About::class, 'about_id');
    }
}
