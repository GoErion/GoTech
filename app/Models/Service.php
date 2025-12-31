<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Webpatser\LaravelUuid\HasUuids;

/**
 * @method static create(array $array)
 * @method static inRandomOrder()
 */
class Service extends Model
{
    use HasUuids;
    protected $fillable = [
        'user_id',
        'subtitle',
        'description'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
