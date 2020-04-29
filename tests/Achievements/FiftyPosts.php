<?php

namespace SkyRaptor\Tests\Achievements;

use SkyRaptor\Achievements\Achievement;

/**
 * Class FiftyPosts.
 */
class FiftyPosts extends Achievement
{
    public $name = 'Fifty Posts';
    public $description = 'You have created 50 posts!';
    public $points = 50;
}
