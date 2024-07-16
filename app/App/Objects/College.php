<?php

namespace App\Objects;

use App\Objects\School;

class College extends School
{
    protected array $level = [
        '6ème',
        '5ème',
        '4ème',
        '3ème'
    ];

    public function __construct(string $schoolName, string $adress, array $level)
    {
        parent::__construct($schoolName, $adress);
        $this->level = $level;
    }

    /**
     * Get the value of level
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set the value of level
     *
     * @return  self
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Show school levels from a school.
     *
     * @return string
     */
    public function showLevel(): string
    {
        return implode(', ', $this->level);
    }
}
