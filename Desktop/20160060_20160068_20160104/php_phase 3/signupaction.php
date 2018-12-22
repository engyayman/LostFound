<?php
include_once 'UserService.php';

$name=$_POST['name'];
$phone=$_POST['phone'];
$password=$_POST['pass'];
$nid=$_POST['nid'];
$email=$_POST['mail'];

$userserv= new UserService();
$userserv->exits($name,$phone,$password,$nid,$email);





?>