<?php

namespace App\Objects;

abstract class Person
{
    // STATIC PROPERTIES
    protected static string $sentence = 'Bonjour, je m\'appelle ##lastname## ##firstname##';


    // INSTANCE PROPERTIES
    protected string $lastname;
    protected string $firstname;
    protected string $school;

    public function initialize(string $lastname, string $firstname, string $school)
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

    // -------------------
    // INSTANCE METHODS
    // -------------------


    /**
     * Introduce my self with a sentence.
     *
     * @return string
     */
    public function introduceMySelf(): string
    {
        preg_match_all('/##(\w+)##/', static::$sentence, $match);

        // $values = [];
        // foreach ($match[1] as $key) {
        //     $values[] = $this->getValueFromKey($key);
        // }
        $values = array_map([$this, 'getValueFromKey'], $match[1]);

        return str_replace($match[0], $values, static::$sentence);
    }

    /**
     * Get a value from a property or named method.
     *
     * @param string $key - Property or method name
     * @return string - value from property or method
     */
    private function getValueFromKey(string $key): string
    {
        if (isset($this->$key)) return $this->$key;

        if (in_array($key, get_class_methods($this))) return $this->$key();

        return '';
    }
}
