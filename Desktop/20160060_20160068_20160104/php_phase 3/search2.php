<?php
include_once 'PoatService.php';
$searchcategory=$_GET["select"];
$word=$_GET['name'];

$postser= new PostService();
$postser->search($searchcategory,$word);



?>