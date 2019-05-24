<?php


require __DIR__ . '/vendor/autoload.php';

use Acme\InputTaker;
use Acme\User;
use Acme\FileIO;

$inputTaker = new InputTaker(2);
$fileIO = new FileIO();
$fullNames = $inputTaker->getFullNames();

$user1 = new User($fullNames[0]);
$user2 = new User($fullNames[1]);
$user3 = new User($fullNames[2]);
$user4 = new User($fullNames[3]);
$user5 = new User($fullNames[4]);
$user6 = new User($fullNames[5]);
$user7 = new User($fullNames[6]);
$user8 = new User($fullNames[7]);
$user9 = new User($fullNames[8]);
$user10 = new User($fullNames[9]);


$users = array($user1,$user2,$user3,$user4,$user5,$user6,$user7,$user8,$user9,$user10);
$fileIO->createExcelFromUsers($users);




