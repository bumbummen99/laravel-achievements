<?php
declare(strict_types=1);

namespace SkyRaptor\Tests\Achievements;

use SkyRaptor\Achievements\Achievement;

/**
 * Class TenPosts
 *
 * @package SkyRaptor\Tests\Achievements
 */
class TenPosts extends Achievement
{
    public $name = '10 Posts';
    public $description = 'You have created 10 posts!';
    public $points = 10;
}
