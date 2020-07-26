<?php

namespace SkyRaptor\Achievements;

use SkyRaptor\Achievements\Contracts\CanAchieve;
use SkyRaptor\Achievements\Model\AchievementProgress;

/**
 * Class AchievementChain.
 */
abstract class AchievementChain implements CanAchieve
{
    /**
     * Expects an array of Achievements.
     *
     * @return Achievement[]
     */
    abstract public function chain(): array;

    /**
     * For an Achiever, return the highest achievement on the chain that is unlocked.
     *
     * @param $achiever
     *
     * @return null|AchievementProgress
     */
    public function highestOnChain($achiever): ?AchievementProgress
    {
        $latestUnlocked = null;
        foreach ($this->chain() as $instance) {
            /** @var Achievement $instance */
            /** @var Achiever $achiever */
            if ($achiever->hasUnlocked($instance)) {
                $latestUnlocked = $achiever->achievementStatus($instance);
            } else {
                return $latestUnlocked;
            }
        }

        return $latestUnlocked;
    }

    /**
     * @param $achiever
     * @param $points
     */
    public function addProgressToAchiever($achiever, $points): void
    {
        foreach ($this->chain() as $instance) {
            /** @var Achievement $instance */
            $instance->addProgressToAchiever($achiever, $points);
        }
    }

    /**
     * @param $achiever
     * @param int $points
     */
    public function setProgressToAchiever($achiever, $points): void
    {
        foreach ($this->chain() as $instance) {
            /** @var Achievement $instance */
            $instance->setProgressToAchiever($achiever, $points);
        }
    }

    /**
     * @param $achiever
     */
    public function lockProgressForAchiever($achiever): void
    {
        foreach ($this->chain() as $instance) {
            /** @var Achievement $instance */
            $instance->lockProgressForAchiever($achiever);
        }
    }
}
