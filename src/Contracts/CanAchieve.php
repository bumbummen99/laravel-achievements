<?php
declare(strict_types=1);

namespace SkyRaptor\Achievements\Contracts;

/**
 * Interface CanAchieve
 *
 * @package SkyRaptor\Achievements
 */
interface CanAchieve
{
    // Adds an specified amount of points of progress
    public function addProgressToAchiever($achiever, $points);

    // Sets the specified amount of points to this achiever
    public function setProgressToAchiever($achiever, $points);
}
