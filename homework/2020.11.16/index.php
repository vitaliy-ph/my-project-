<?php
declare(strict_types=1);

error_reporting(E_ALL);


require_once __DIR__ . '/Homework.php';
require_once __DIR__ . '/Student.php';
require_once __DIR__ . '/Mentor.php';

var_dump(Homework::SCHOOL);

$mentor = new Mentor();
$mentor->setName('Homer Simpson');
$mentor->setHomework('I have a two new homework');
$mentor->setDescribe('№1 create a database on the host, №2 create classes in OOP');



$student = new Student();
$student->setName('Bart Simpson');
$student->setHomework('I accepted homework №1');
$student->setDescribe('create a database on the host');


$student2 = new Student();
$student2->setName('Bender Rodriguez');
$student2->setHomework('I accepted homework №2');
$student2->setDescribe('create classes in OOP');


var_dump($mentor,$student,$student2);


echo "{$student->getName()}: deadline({$student->makeHomework()})", PHP_EOL;
echo "{$student2->getName()}: deadline({$student2->makeHomework()})", PHP_EOL;



echo "Bart Simpson: {$student->passHomework()}",PHP_EOL;
echo "Bender Rodriguez: {$student2->passHomework()}",PHP_EOL;

echo"Homer Simpson: {$mentor->checkHomework()}",PHP_EOL;

echo "Homer Simpson: Bart Simpson {$mentor->homeworkDone()}",PHP_EOL;
echo "Homer Simpson: Bender Rodriguez {$mentor->homeworkDone()}",PHP_EOL;