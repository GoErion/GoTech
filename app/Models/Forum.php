<?php

namespace App\Models;

use App\Enum\CategoryEnum;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 */
class Forum extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'category',
    ];
    protected $casts = [
            'category' => CategoryEnum::class,
        ];
}
