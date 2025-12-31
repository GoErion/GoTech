<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Webpatser\LaravelUuid\HasUuids;

/**
 * @method static create(array $array)
 * @method static first()
 */
class Hero extends Model
{
    protected $fillable = [
        'user_id',
        'heading',
        'hero_image',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
