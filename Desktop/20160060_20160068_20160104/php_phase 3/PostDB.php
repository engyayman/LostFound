<?php
/**
* 
*/
include_once 'Post.php';
class PostDB
{
	  
     public $verified;
     #$Post=new Post();
	

    public function addpost($post){
    	$title=$post->gettitle();
    	$desc=$post->getdescription();
    	$image=$post->getpicturepath();
    	$category=$post->getcategory();
    	$db=new PDO('mysql:host=localhost;dbname=lostfind;charset=utf8','root','');
          $insertion =$db->prepare("INSERT INTO post(title,description,picture,category) VALUES (:title,:description,:image,:category)");
  if($insertion->execute( array(":title" => $title,":description" => $desc,":image" => $image,":category" => $category )))
    {


      $stat="successful insertion";
    }
    else
    {
      $stat="somthing wrong......";
    }


    }
    public function updatepost(){}
    public function deletepost(){}
    public function search($searchcategory,$word)
    {
      $db=new PDO('mysql:host=localhost;dbname=lostfind;charset=utf8','root','');

if($searchcategory=='laptops'){

$selecto = $db->prepare("SELECT * FROM post where category like'%laptop%'");
$selecto->execute();
$x=0;
foreach ($selecto as $val) {
 /*echo $val["title"];*/
 $x=1;
 $selecto = $db->prepare("SELECT * FROM post where description like '%$word%' or title like '%$word%' ");
if($selecto->execute())
{echo "found<br>";
foreach ($selecto as $val) {
    
 echo $val["title"]."<br>".$val["description"];}
            
}
}
if($x==0)
{
    echo "not in system";
}

}



if($searchcategory=='clothes'){

$selecto = $db->prepare("SELECT * FROM post where category like'%clothes%'");
$selecto->execute();
$x=0;
foreach ($selecto as $val) {
 echo $val["title"];
 $x=1;
 $selecto = $db->prepare("SELECT * FROM post where description like '%$word%' or title like '%$word%' ");
if($selecto->execute())
{echo "found<br>";
foreach ($selecto as $val) {
    
 echo $val["title"]."<br>".$val["description"];}
            
}
}
if($x==0)
{
    echo "not in system";
}

}

if($searchcategory=='mobiles'){

$selecto = $db->prepare("SELECT * FROM post where category like'%mobiles%'");
$selecto->execute();
$x=0;
foreach ($selecto as $val) {
 echo $val["title"];
 $x=1;
 $selecto = $db->prepare("SELECT * FROM post where description like '%$word%' or title like '%$word%' ");
if($selecto->execute())
{echo "found<br>";
foreach ($selecto as $val) {
    
 echo $val["title"]."<br>".$val["description"];}
            
}
}
if($x==0)
{
    echo "not in system";
}

}


if($searchcategory=='others'){

$selecto = $db->prepare("SELECT * FROM post where category like'%others%'");
$selecto->execute();
$x=0;
foreach ($selecto as $val) {
 echo $val["title"];
 $x=1;
 $selecto = $db->prepare("SELECT * FROM post where description like '%$word%' or title like '%$word%' ");
if($selecto->execute())
{
    echo "found<br>";
foreach ($selecto as $val) {
    
 echo $val["title"]."<br>".$val["description"];}
            
}
}
if($x==0)
{
    echo "not in system";
}

}

    }
   
}









?>