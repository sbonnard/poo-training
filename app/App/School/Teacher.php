<?php

namespace App\School;


class Teacher extends Person
{

    // STATIC PROPERTIES
    public const TITLE = 'Professeur';

    // INSTANCE PROPERTIES
    private array $subjects = [];

    public function __construct(string $lastname, string $firstname, string $school = '', array $subjects = [])
    {
        parent::__construct($lastname, $firstname, $school);

        $this->subjects = $subjects;
    }

    /**
     * Get the value of subjects
     */
    public function getSubjects()
    {
        return implode(", ", $this->subjects);
    }

    /**
     * Set the value of subjects
     *
     * @return  self
     */
    public function setSubjects($subjects)
    {
        $this->subjects = $subjects;
    }

    /**
     * Add a subject to a teacher.
     *
     * @param string $newSubject - The new subject to add.
     * @return void
     */
    public function addSubject(string $newSubject): void
    {
        $this->subjects[] = $newSubject;
    }

    /**
     * Show every subjects of a professor in a string
     *
     * @return string
     */
    public function showSubjects(): string
    {
        return 'Professeur ' . $this->firstname . ' ' . $this->lastname . " : " . $this->getSubjects() . '.';
    }

    /**
     * Delete a subject of a teacher.
     *
     * @param string $toDeleteSubject - The subject o delete.
     * @return void
     */
    public function deleteSubject(string $toDeleteSubject): void
    {
        $key = array_search($toDeleteSubject, $this->subjects);
        if ($key !== false) {
            unset($this->subjects[$key]);
            $this->subjects = array_values($this->subjects);
        }
    }

    /** Get sentence for exercice 6.
     *
     * @param [type] $student - The student concerned.
     * @param [type] $diffStudent - The age of the student.
     * @return string - A sentence that answers to question 6.
     */
    function introduceMyself(): string
    {
        return 'Bonjour, je m\'appelle '
            . $this->firstname
            . ' '
            . $this->lastname
            . ' et j\enseigne à l\'école '
            . $this->school
            . ' les matières suivantes : '
            . $this->getSubjects()
            . '.';
    }
}
