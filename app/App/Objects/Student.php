<?php

namespace App\Objects;

use Datetime;
use App\Objects\Person;

class Student extends Person
{
    // STATIC PROPERTIES
    protected static string $sentence = 'Bonjour, je m\'appelle ##lastname## ##firstname##, j\'ai ##getAge## ans et je vais à l\'école ##school## en classe de ##level##.';


    // INSTANCE PROPERTIES
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
        parent::initialize($lastname, $firstname, $school);
        $this->birthdate = $birthdate;
        $this->level = $level;
    }

    // ---------------------------------
    // GETTERS & SETTERS
    // ---------------------------------


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

    // /** Get sentence for exercice 6.
    //  *
    //  * @param [type] $student - The student concerned.
    //  * @param [type] $diffStudent - The age of the student.
    //  * @return string - A sentence that answers to question 6.
    //  */
    // function introduceMyself(): string
    // {
    //     return 'Bonjour, je m\'appelle '
    //         . $this->firstname
    //         . ' '
    //         . $this->lastname
    //         . ', j\'ai '
    //         . $this->getAge()
    //         . ' ans et je vais à l\'école '
    //         . $this->school
    //         . ' en classe de '
    //         . $this->level
    //         . '.';
    // }
}
