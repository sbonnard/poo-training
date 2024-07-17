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

    /**
     * CHecks if a school accepts a school level or not.
     *
     * @param string $searchedLevel - The searched level.
     * @return string - The string that says if a school accepts a level or not.
     */
    public function supportsLevel(string $searchedLevel):string {
        if(in_array($searchedLevel, $this->level)) {
            return 'L\'école ' . $this->getSchoolName() . ' accepte le niveau ' . $searchedLevel . '.';
        } else {
            return 'L\'école ' . $this->getSchoolName() . ' n\'accepte pas le niveau ' . $searchedLevel . '.';
        }
    }
}