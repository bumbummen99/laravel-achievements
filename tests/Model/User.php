<?php
declare(strict_types=1);

namespace SkyRaptor\Tests\Model;

use SkyRaptor\Achievements\Traits\Achiever;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 *
 * @package SkyRaptor\Tests\Model
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
