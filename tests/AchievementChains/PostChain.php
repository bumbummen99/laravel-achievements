<?php
declare(strict_types=1);

namespace SkyRaptor\Tests\AchievementChains;

use SkyRaptor\Achievements\AchievementChain;
use SkyRaptor\Tests\Achievements\FiftyPosts;
use SkyRaptor\Tests\Achievements\FirstPost;
use SkyRaptor\Tests\Achievements\TenPosts;

/**
 * Class PostChain
 *
 * @package SkyRaptor\Tests\AchievementChains
 */
class PostChain extends AchievementChain
{
    public function chain(): array
    {
        return [new FirstPost(), new TenPosts(), new FiftyPosts()];
    }
}
