<?php

/**
* 
*/
class Form
{


    private $question;
    private $answers;
    private $phone;
	
	public function construct($q,$ans,$phon)
	{
		$this->queation=$q;
		$this->answers=$ans;
		$this->phone=$phon;

	}
	
	public function setname($question){
		$this->question=$question;

	}
	public function setamswers($answers){
		$this->answers=$answers;

	}
	public function setphone($phone){
		$this->phone=$phone;

	}

	public function getquestion(){
	return $this->question;

	}
	public function getanswers(){
	return $this->answers;

	}
	public function getphone(){
	return $this->phone;

	}

}





?>



//////////////////////////////////////////////
