<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class News extends Model
{
    protected $table = 'news';

    public $timestamps = true;

    protected $fillable = [
        'tag',
        'title',
        'short_text',
        'content',
        'img',
        'order',
        'status'
    ];

    public function tag(): BelongsTo
    {
        return $this->belongsTo(Tag::class);
    }
    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
