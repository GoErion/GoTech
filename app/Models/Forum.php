<?php

namespace App\Models;

use App\Enum\CategoryEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static create(array $array)
 */
class Forum extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'image',
        'category',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    protected $casts = [
            'category' => CategoryEnum::class,
        ];
}
