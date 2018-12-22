<?php
/**
* 
*/
include_once 'Form.php';
class FormDB
{
	  
    // $Form=new Form();
	//function __construct(argument)
//	{
		# code...
//	} 

    public function addform($form){
    	$quest= $form->getquestion();
    	$db=new PDO('mysql:host=localhost;dbname=lostfind;charset=utf8','root','');
          $insertion =$db->prepare("INSERT INTO form(question) VALUES (:question)");
  if($insertion->execute( array(":question" => $quest )))
    {


      $stat="successful insertion";
    }
    else
    {
      $stat="somthing wrong......";
    }
    }
    public function retrieveform(){}
    public function removeform(){}
    public function updateform(){}
}




?>
