<?php
declare(strict_types=1);

namespace SkyRaptor\Tests\Achievements;

use SkyRaptor\Achievements\Achievement;

/**
 * Class FiftyPosts
 *
 * @package SkyRaptor\Tests\Achievements
 */
class FiftyPosts extends Achievement
{
    public $name = 'Fifty Posts';
    public $description = 'You have created 50 posts!';
    public $points = 50;
}
