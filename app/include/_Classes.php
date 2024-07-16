<?php

class Person
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

class Student extends Person
{
    protected DateTime $birthdate;
    protected string $level;

    /**
     * A constructor for all infos of the object Student.
     *
     * @param string $lastname - Student's lastname.
     * @param string $firstname - Student's firstname.
     * @param string $birthdate - Student's birthdate.
     * @param string $level - Student's level.
     */
    public function __construct(string $lastname, string $firstname, string $school, DateTime $birthdate,  string $level)
    {
        parent::$lastname;
        parent::$firstname;
        parent::$school;
        $this->birthdate = $birthdate;
        $this->level = $level;
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
     * set the level
     *
     * @param string $level
     * @return void
     */
    public function setLevel(string $level): void
    {
        $this->level = $level;
    }

    /**
     * get the level
     *
     * @return string
     */
    public function getLevel(): string
    {
        return $this->level;
    }


    /**
     * Get the value of birthdate
     * @return DateTime a birthdate
     */
    public function getBirthdate(): DateTime
    {
        return $this->birthdate;
    }

    /**
     * Set the value of birthdate.
     *@param DateTime $birthdate a birthdate.
     * @return  void
     */
    public function setBirthdate(DateTime $birthdate): void
    {

        $this->birthdate = $birthdate;
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

    // ---------------------------------
    // INSTANCE METHODS
    // ---------------------------------

    /**
     * get the age
     *
     * @return int
     */
    public function getAge(): int
    {
        return $this->birthdate->diff(new DateTime())->y;
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
            . ', j\'ai '
            . $this->getAge()
            . ' ans et je vais à l\'école '
            . $this->school
            . ' en classe de '
            . $this->level
            . '.';
    }
}


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
     * Get the value of lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * Get the value of firstname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * Get the value of school
     */
    public function getSchool()
    {
        return $this->school;
    }

    /**
     * Set the value of school
     *
     * @return  self
     */
    public function setSchool($school)
    {
        $this->school = $school;
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

    public function addSubject(string $newSubject): void
    {
        $this->subjects[] .= $newSubject;
    }

    public function showSubjects()
    {
        return 'Professeur ' . $this->firstname . ' ' . $this->lastname . " : " . $this->getSubjects() . '.';
    }

    public function deleteSubject(string $toDeleteSubject)
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
