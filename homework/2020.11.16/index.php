<?php

declare(strict_types=1);
error_reporting(E_ALL);


require_once __DIR__ . '/./classes/Memory.php';
require_once __DIR__ . '/./classes/Student.php';
require_once __DIR__ . '/./classes/Mentor.php';
require_once __DIR__ . '/./classes/Homework.php';



$mentor = new Mentor('Homer Simpson', 'PHP', true);
$student = new Student('Bart Simpson', $mentor->getCompLang(), false );
$student2 = new Student('Peter Griffin', $mentor->getCompLang(), false );

$Hm = new Homework();


$Hm->addHm('2020-11-22', 'create classes in oop', $mentor);
$Hm->addHm('2020-12-02', 'create a database on hosting', $mentor);



$student->setHm($Hm->getHm());
$student->makeHm();

$student2->setHm($Hm->getHm());
$student2->makeHm();


$student->checkHm($mentor);

$student2->checkHm($mentor);