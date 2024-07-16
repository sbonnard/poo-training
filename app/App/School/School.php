<?php

namespace App\School;

abstract class School
{
    protected string $schoolName;
    protected string $adress;

    public function __construct(string $schoolName, string $adress)
    {
        $this->schoolName = $schoolName;
        $this->adress = $adress;
    }
}
