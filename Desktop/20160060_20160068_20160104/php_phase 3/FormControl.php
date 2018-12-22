<?php

/**
* 
*/
include_once 'FormDB.php';
include_once 'Form.php';
class FormService 
{


    #$Form=new Form();
    #$FormDB=new FormDB();
	
	
    public function addform($question)
    {echo "<br>"."question".$question ;
    $form= new Form();
    $form->setname($question);
    echo "get".$form->getquestion();
    $formdb= new FormDB();
    $formdb->addform($form);
        
    }
    public function deleteform()
    {
        
    }
    public function updateform()
    {
        
    }

}



?>
