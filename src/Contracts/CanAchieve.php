<?php

namespace SkyRaptor\Achievements\Contracts;

/**
 * Interface CanAchieve.
 */
interface CanAchieve
{
    // Adds an specified amount of points of progress
    public function addProgressToAchiever($achiever, $points) : void;

    // Sets the specified amount of points to this achiever
    public function setProgressToAchiever($achiever, $points) : void;

    // Re-locks the achievement and reset the progress for the achiever
    public function lockProgressForAchiever($achiever) : void;
}