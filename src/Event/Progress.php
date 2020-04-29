<?php

namespace SkyRaptor\Achievements\Event;

use Illuminate\Queue\SerializesModels;
use SkyRaptor\Achievements\Model\AchievementProgress;

/**
 * Class Progress.
 */
class Progress
{
    use SerializesModels;

    /**
     * @var AchievementProgress
     */
    public $progress;

    /**
     * Create a new event instance.
     *
     * @param AchievementProgress $progress
     */
    public function __construct(AchievementProgress $progress)
    {
        $this->progress = $progress;
    }
}
