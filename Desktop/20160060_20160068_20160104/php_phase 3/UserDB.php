<?php
/**
* 
*/
include_once 'User.php';
class UserDB {
	  
     #$verified;
  #  private $usr = new User();
	/*function __construct(argument)
	{
		# code...
	} */
    public $var;
    public function adduser($user){
        echo "here in save user";
        $uname=$user->getname();
        $uemail=$user->getmail();
        $uid=$user->getid();
        $upass=$user->getpassword();
        $uphone=$user->getphone();
         $db=new PDO('mysql:host=localhost;dbname=lostfind;charset=utf8','root','');
          $insertion =$db->prepare("INSERT INTO user(name,phone,password,email,nationalid) VALUES (:name,:phone,:password,:email,:nationalid)");
  if($insertion->execute( array(":name" => $uname,":phone" => $uphone,":password" => $upass,":email" => $uemail,":nationalid" => $uid )))
    {


      $stat="successful insertion";
    }
    else
    {
      $stat="somthing wrong......";
    }


    }
    #public function removeuser(User){}
    #public function updateuser(User){}
    public function validateuser($var, $var1){
        echo $var."<br>";
        echo $var1."<br>";
            $db=new PDO('mysql:host=localhost;dbname=lostfind;charset=utf8','root','');
        $sl=$db->prepare("SELECT * FROM user");
        $sl->execute();
//header("Location:admin.php");
$x=0;
foreach ($sl as $val) {
  if($val['email']==$var && $val['password']==$var1)
    {
    
   echo "welcome ".$val['name'];
   $x=1;
}
}
if($x==0)
{
    echo "not in system";
}
#return $x;

      
    }
    public function exits($mail)
    {
  echo $mail."<br>";
        #echo $var1."<br>";
        $db=new PDO('mysql:host=localhost;dbname=lostfind;charset=utf8','root','');
        $sl=$db->prepare("SELECT * FROM user");
        $sl->execute();
//header("Location:admin.php");
$x=0;
foreach ($sl as $val) {
  if($val['email']==$mail)
    {
    
    $x=1;
}
}
return $x;



    }
    public function retrievedata(){}
    public function fail(){
    	$check=false;

    	return $check;}
}









?>