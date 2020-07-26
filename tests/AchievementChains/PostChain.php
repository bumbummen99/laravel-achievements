<?php

namespace SkyRaptor\Tests\AchievementChains;

use SkyRaptor\Achievements\AchievementChain;
use SkyRaptor\Tests\Achievements\FiftyPosts;
use SkyRaptor\Tests\Achievements\FirstPost;
use SkyRaptor\Tests\Achievements\TenPosts;

/**
 * Class PostChain.
 */
class PostChain extends AchievementChain
{
    /**
     * Expects an array of Achievements.
     *
     * @return Achievement[]
     */
    public function chain(): array
    {
        return [
            new FirstPost(),
            new TenPosts(),
            new FiftyPosts(),
        ];
    }
}
