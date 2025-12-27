<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 */
class Service extends Model
{
    protected $fillable = [
        'subtitle',
        'description'
    ];
}
