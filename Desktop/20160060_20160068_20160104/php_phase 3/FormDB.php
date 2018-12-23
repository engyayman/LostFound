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
// this is add form
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
    // this function retrive form to user to fill 

    public function retrieveform(){}
    // this removing form

    public function removeform(){}
    //this to update form
    public function updateform(){}
}




?>
