<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Webpatser\LaravelUuid\HasUuids;

/**
 * @method static create(array $array)
 * @property mixed $id
 */
class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function hero()
    {
        return $this->hasOne(Hero::class);
   }

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function forums()
    {
        return $this->hasMany(Forum::class);
    }
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
