<?php

namespace App\Objects;

class School
{
    private string $schoolName;
    private string $adress;

    public function __construct(string $schoolName, string $adress)
    {
        $this->schoolName = $schoolName;
        $this->adress = $adress;
    }

    /**
     * Get the value of schoolName
     */
    public function getSchoolName()
    {
        return $this->schoolName;
    }

    /**
     * Set the value of schoolName
     *
     * @return  self
     */
    public function setSchoolName($schoolName)
    {
        $this->schoolName = $schoolName;
    }

    /**
     * Get the value of adress
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set the value of adress
     *
     * @return  self
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;
    }
}
