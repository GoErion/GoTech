<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 * @method static first()
 */
class Hero extends Model
{
    protected $fillable = [
        'heading',
        'hero_image',
    ];
}
