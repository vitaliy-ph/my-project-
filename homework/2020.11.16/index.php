<?php

declare(strict_types=1);
error_reporting(E_ALL);



include_once(__DIR__ . '/func.php');

$autoloaderFunction = 'classesAutoloader';

if (!function_exists($autoloaderFunction)) {
    die('Autoloader error!');
}

spl_autoload_register($autoloaderFunction);

/*var_dump(Memory::SCHOOL);*/

$mentor = new Mentor('Homer Simpson', 'PHP', true);
$student = new Student('Bart Simpson', $mentor->getCompLang(), false );
$student2 = new Student('Petter Grifin', $mentor->getCompLang(), false );

$Hm = new Homework();


$Hm->addHm('2020-11-22', 'create classes in oop', $mentor);
$Hm->addHm('2020-12-02', 'create a database on hosting', $mentor);



$student->setHm($Hm->getHm());
$student->makeHm();

$student2->setHm($Hm->getHm());
$student2->makeHm();


$student->checkHm($mentor);

$student2->checkHm($mentor);

