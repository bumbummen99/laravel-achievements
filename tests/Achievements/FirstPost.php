<?php
declare(strict_types=1);

namespace SkyRaptor\Tests\Achievements;

use SkyRaptor\Achievements\Achievement;

/**
 * Class FirstPost
 *
 * @package SkyRaptor\Tests\Achievements
 */
class FirstPost extends Achievement
{
    public $name = 'First Post';
    public $description = 'You made your first post!';
}
