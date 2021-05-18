<?php
include_once "GenderInterface.php";
include_once "SquareDance.php";
include_once "Dance.php";

$dance1 = new Dance("Hung", GenderInterface::MALE);
$dance2 = new Dance("Nam", GenderInterface::MALE);
$dance3 = new Dance("Hoang", GenderInterface::MALE);
$dance4 = new Dance("Linh", GenderInterface::MALE);
$dance5 = new Dance("My", GenderInterface::FEMALE);
$dance6 = new Dance("Thao", GenderInterface::FEMALE);
$dance7 = new Dance("Le", GenderInterface::FEMALE);
$dance8 = new Dance("Chi", GenderInterface::FEMALE);
$dance9 = new Dance("Trang", GenderInterface::FEMALE);
$dance10 = new Dance("Kim", GenderInterface::FEMALE);





$squareDance = new SquareDance();
$squareDance->addDance($dance1);
$squareDance->addDance($dance2);
$squareDance->addDance($dance3);
$squareDance->addDance($dance4);
$squareDance->addDance($dance5);
$squareDance->addDance($dance6);
$squareDance->addDance($dance7);
$squareDance->addDance($dance8);
$squareDance->addDance($dance9);
$squareDance->addDance($dance10);

echo $squareDance->pairDance();