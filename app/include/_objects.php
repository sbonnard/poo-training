<?php

class Student
{
    private string $lastname;
    private string $firstname;
    private string $birthdate;
    private string $level;
    private string $school;

    /**
     * A constructor for all infos of the object Student.
     *
     * @param string $lastname - Student's lastname.
     * @param string $firstname - Student's firstname.
     * @param string $birthdate - Student's birthdate.
     * @param string $level - Student's level.
     */
    public function __construct(string $lastname, string $firstname, string $birthdate, string $level, string $school)
    {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->birthdate = $birthdate;
        $this->level = $level;
        $this->school = $school;
    }

    /**
     * Get student's lastname.
     *
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * Set student's lastname.
     *
     * @param string $lastname - The lastname of a student.
     * @return void
     */
    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * Get student's firstname.
     *
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * Set student's firstname.
     *
     * @param string $firstname - Student's firstname.
     * @return void
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * Get student's birthdate.
     *
     * @return integer
     */
    public function getBirthdate(): string
    {
        return $this->birthdate;
    }

    /**
     * Set student's birthdate.
     *
     * @param string $birthdate - Student's birthdate.
     * @return void
     */
    public function setBirthdate(string $birthdate): void
    {
        $this->birthdate = $birthdate;
    }

    /**
     * Get student's school level.
     *
     * @return string
     */
    public function getLevel(): string
    {
        return $this->level;
    }

    /**
     * Set student's school level.
     *
     * @param string $level - Student's school level.
     * @return void
     */
    public function setLevel(string $level): void
    {
        $this->level = $level;
    }

    // public function getAge():int {
    //     $currentYear = date("Y");
    //     $age = new DateTime($currentYear, $this->birthdate);
    // }

    public function getSchool():string
    {
        return $this->school;
    }

    public function setSchool(string $school): void
    {
        $this->school = $school;
    }
}


$student1 = new Student('Molotov', 'Zangief', 15, '2nde', '');
$student2 = new Student('Li', 'Chun-Li', 11, '6ème', '');
