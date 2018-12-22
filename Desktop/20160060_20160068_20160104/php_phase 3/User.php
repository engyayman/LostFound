<?php
//include_once 'log.php';
class User

{
    public $name;
    public $phone;
    public $password;
    public $ID;
    public $email;
    public $picturepath;
   # public User(){}
    #$userserv=new UserService();
    #public function __construct(){}
	
	public function userconstruct($name,$phone,$password,$ID,$email)
	{
		$this->name=$name;
		$this->phone=$phone;
		$this->password=$password;
		$this->ID=$ID;
		$this->email=$email;
		
	}
	public function setname($name){
		$this->name=$name;

	}
	public function setphone($phone){
		$this->pnone=$pnone;

	}
	public function setpassword($pass){
		$this->password=$pass;

	}
	public function setid($id){
	$this->ID=$id;

	}
     public function setpic($pic){
	$this->picturepath=$pic;

	}
	public function getname(){
	return $this->name;

	}
	public function getphone(){
	return $this->phone;

	}
	public function getpassword(){
	return $this->password;

	}
	public function getid(){
	return $this->ID;

	}
	public function getmail(){
	return $this->email;

	}
}
















?>