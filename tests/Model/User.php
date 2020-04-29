<?php

declare(strict_types=1);

namespace SkyRaptor\Tests\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use SkyRaptor\Achievements\Traits\Achiever;

/**
 * Class User.
 */
class User extends Authenticatable
{
    use Achiever;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
