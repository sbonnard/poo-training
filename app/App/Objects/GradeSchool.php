<?php

namespace App\Objects;

use App\Objects\School;

class GradeSchool extends School
{
    protected array $level = [
        'CP',
        'CE1',
        'CE2',
        'CM1',
        'CM2'
    ];

    public function __construct(string $schoolName, string $adress, array $level = null) {
        parent::__construct($schoolName, $adress);
        if ($level !== null) {
            $this->level = $level;
        }
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