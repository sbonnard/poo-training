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

    // ---------------------------------
    // GETTERS & SETTERS
    // ---------------------------------


    /**
     * set first name
     *
     * @param string $firstname
     * @return void
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * get the first name
     *
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * set last name
     *
     * @param string $lastname
     * @return void
     */
    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * get the last name
     *
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

        /**
     * get school
     *
     * @return string
     */
    public function getSchool(): string
    {
        return $this->school;
    }

    /**
     * set school
     *
     * @return string
     */
    public function setSchool(string $school): void
    {
        $this->school = $school;
    }
}

