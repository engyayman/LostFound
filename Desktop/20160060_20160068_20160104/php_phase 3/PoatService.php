<?php

/**
* 
*/
include_once 'PostDB.php';
include_once 'Post.php';
//include_once 'FormControl.php';
class PostService
{
     #$Post=new Post();
     #$Form = new Form();
     #$Postdb =new Postdb();

    
    public function savepostDB($title, $desc,$image,$selection){
        $post= new Post();
        $post->constuctpost($title,$desc,$image,$selection);
        echo $post->gettitle();
        echo "here post service ".$title;
       $dbpost= new PostDB();
       $dbpost->addpost($post);

    }
    public function showform(){}
    public function deletepost(){}
    public function displayposteditem(){}
    public function updatepost(){}
    public function displayfullpost(){}
    public function saveform(){}
    public function retrievepost(){}

    public function search($searchcategory,$word)
    {
//         $searchcategory=$_GET["select"];
// $word=$_GET['name'];
$var = new PostDB();
$var->search($searchcategory,$word);

    }
    
    
}

?>