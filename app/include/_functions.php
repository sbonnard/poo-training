<?php

/**
 * Get sentence for exercice 6.
 *
 * @param [type] $student - The student concerned.
 * @param [type] $diffStudent - The age of the student.
 * @return string - A sentence that answers to question 6.
 */
function getSentence($student): string
{
    return '<p>Bonjour, je m\'appelle '
        . $student->getFirstname()
        . ', j\'ai '
        . $student->getAge() 
        . ' ans et je vais à l\'école '
        . $student->getSchool() 
        . ' en classe de '
        . $student->getLevel() 
        . '.</p>';
}
