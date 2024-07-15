<?php
require_once "./include/_objects.php";
require_once "./include/_functions.php";
var_dump(intval(date('Y')));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>POO - Des élèves</title>
</head>

<body class="dark-template">
    <div class="container">
        <header class="header">
            <h1 class="main-ttl">Programmation Orientée Objet - Des élèves</h1>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><a href="index.php" class="main-nav-link active">Des élèves</a></li>
                    <li><a href="exo2.php" class="main-nav-link">Des profs</a></li>
                    <li><a href="exo3.php" class="main-nav-link">On s'organise</a></li>
                    <li><a href="exo4.php" class="main-nav-link">Des écoles</a></li>
                    <li><a href="exo5.php" class="main-nav-link">Des vues</a></li>
                </ul>
            </nav>
        </header>

        <!-- QUESTION 1 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 1</h2>
            <p class="exercice-txt">
                Créer une classe permettant de créer des élèves ayant un nom, un prénom, un age et un niveau scolaire.
                <br>
                Définir toutes les propriétés à l'instanciation.
                <br>
                Créer 2 étudiants différents.
            </p>
            <div class="exercice-sandbox">
                <?php
                $student1 = new Student('Molotov', 'Zangief', new DateTime(), '2nde', '');
                $student2 = new Student('Li', 'Chun-Li', new DateTime(), '6ème', '');

                var_dump($student1);
                var_dump($student2);
                ?>
            </div>
        </section>

        <!-- QUESTION 2 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt">
                Créer les getters et les setters permettant de manipuler toutes les propriétés des élèves.
                <br>
                Modifier le niveau scolaire des 2 élèves et les afficher.
            </p>
            <div class="exercice-sandbox">
                <div>
                    <?php
                    $student1->setLevel("première");

                    echo '<p>' . $student1->getFirstname() . ' est en ' . $student1->getLevel() . '.</p>';

                    ?>
                </div>
                <div>
                    <?php

                    $student2->setLevel("5ème");

                    echo '<p>' . $student2->getFirstname() . ' est en ' . $student2->getLevel() . '.</p>';
                    ?>
                </div>
            </div>
        </section>

        <!-- QUESTION 3 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt">
                Remplacer la propriété d'âge par la date de naissance de l'élève.
                <br>
                Mettez à jour l'instanciation des 2 élèves et afficher leur date de naissance.
            </p>
            <div class="exercice-sandbox">
                <?php
                $student1->setBirthdate(new DateTime('1994-06-01'));
                $student2->setBirthdate(new DateTime('1996-04-11'));

                var_dump($student1->getBirthdate());

                echo '<p>La date de naissance de ' . $student1->getFirstname() . ' est : ' . $student1->getBirthdate()->format('Y-m-d') . '.</p>';
                echo '<p>La date de naissance de ' . $student2->getFirstname() . ' est : ' . $student2->getBirthdate()->format('Y-m-d') . '.</p>';
                ?>
            </div>
        </section>

        <!-- QUESTION 4 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt">
                Donner la possibilité aux élèves de donner leur âge.
                <br>
                Afficher l'âge des 2 élèves.
            </p>
            <div class="exercice-sandbox">
            <?php
                    echo '<p>J\'ai ' . $student1->getAge() . ' ans. <br>';
                    echo 'J\'ai ' . $student2->getAge() . ' ans.</p>';
                ?>

            </div>
        </section>

        <!-- QUESTION 5 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 5</h2>
            <p class="exercice-txt">
                On veut aussi savoir le nom de l'école où va un élève.
                <br>
                Ajouter la propriété et ajouter la donnée sur les élèves.
            </p>
            <div class="exercice-sandbox">
                <?php
                $student1->setSchool('Lycée de catch de Moscou');
                $student2->setSchool('Collège de Pékin');

                echo '<p>' . $student1->getFirstname() . ' va au ' . $student1->getSchool() .  '.</p>';
                echo '<p>' . $student2->getFirstname() . ' va au ' . $student2->getSchool() .  '.</p>';
                ?>
            </div>
        </section>

        <!-- QUESTION 6 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 6</h2>
            <p class="exercice-txt">
                Donner la possibilité aux élèves de se présenter en affichant la phrase suivante :<br>
                "Bonjour, je m'appelle XXX XXX, j'ai XX ans et je vais à l'école XXX en class de XXX.".
                <br>
                Afficher la phrase de présentation des 2 élèves.
            </p>
            <div class="exercice-sandbox">
                <?php
                echo getSentence($student1);
                echo getSentence($student2);
                ?>
            </div>
        </section>

    </div>
    <div class="copyright">© Guillaume Belleuvre, 2023 - DWWM</div>
</body>

</html>