<?php

require_once  'UserService.php';

#$userdatabase=new UserDB();
$userserv= new UserService();
#$userlog=new User();
$mail=$_POST["mail"];
$pass=$_POST["pass"];
#echo "mail ".$mail;


$userserv->validateuser($mail, $pass);


?>