<?php
include_once 'PoatService.php';
include_once 'FormControl.php';
$title=$_GET["title"];
$desc=$_GET["desc"];
$image=$_GET["image"];
$question=$_GET["question"];
$selection=$_GET["select"];
echo $selection;

echo $title;
$postserv= new PostService();
$postserv->savepostDB($title, $desc,$image,$selection);

$formserv= new FormService();
$formserv->addform($question);






?>