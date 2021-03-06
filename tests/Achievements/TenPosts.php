<?php

namespace SkyRaptor\Tests\Achievements;

use SkyRaptor\Achievements\Achievement;

/**
 * Class TenPosts.
 */
class TenPosts extends Achievement
{
    public $name = '10 Posts';
    public $description = 'You have created 10 posts!';
    public $points = 10;
}
