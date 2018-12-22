<?php

/**
* 

*/
include_once 'UserDB.php';
include_once 'User.php';

class UserService
{
	  #$user=new user();
     #$dbu=new UserDB();
     #$cat=new Category();
    //post post;
     public function validateuser($mail,$pass){
         $user= new UserDB();
         $user->validateuser($mail, $pass);

     }
    public function exits($name,$phone,$password,$nid,$email)
    {
     $userr= new UserDB();
        $flag=$userr->exits($email);
        if($flag==0)
        {
            echo "continue";
            $newuser= new User();
            $newuser->userconstruct($name,$phone,$password,$nid,$email);
            echo $newuser->getname();
            $userserv= new UserService();
            $userserv->saveuser($newuser);


        }
        else
        {
            echo "already in system";
            #header("Location:signup.php");
        }
    }
    public function saveuser($user){
        $newdb= new UserDB();
        echo "here in save user";
        $newdb->adduser($user);

    }
    public function removeuser(){}
    public function getdatauser(){}
    public function updatedatauser(){}
    public function displaydata(){}
    public function displaycategory(){}
    public function lookupincategory(){}
	
}























?>