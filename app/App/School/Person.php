<?php
namespace App\School;

abstract class Person
{
    protected string $lastname;
    protected string $firstname;
    protected string $school;

    public function __construct(string $lastname, string $firstname, string $school)
    {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->school = $school;
    }
}
