<?php

/**
* 
*/
class Post
{


    private $title;
    private $description;
    private $picturepath;
    private $categorytype;
    #$PostService = new postserv();

	
	public function constuctpost($t,$d,$path,$category)
	{
		$this->title=$t;
		$this->description=$d;
		$this->picturepath=$path;
		$this->categorytype=$category;
	}
	public function settitle($title){
		$this->title=$title;

	}
	public function setphone($description){
		$this->description = $description;

	}
	public function setpassword($picturepath){
		$this->picturepath = $picturepath;

	}
	
	public function gettitle(){
	return $this->title;

	}
	public function getcategory()
	{
		return $this->categorytype;/////////////////////////////////////////////////
	}
	public function getdescription(){
	return $this->description;

	}
	public function getpicturepath(){
	return $this->picturepath;

	}
	
}