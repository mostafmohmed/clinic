<?php
require_once 'helper/valtion.php';
require_once 'helper/creddp.php';

function  validaesubject($name) 
 {
    $error=null;
    if(empty($name)){
$error="the subject required";
    }elseif(strlen($name)>=255){
        $error="the subject is,nt must exceed 255";

    }elseif(!is_string($name)||is_numeric($name)){
        $error="the subject must be string";
    }
    return $error;
}
function  validaesmassage($name) 
 {
    $error=null;
    if(empty($name)){
$error="the massage required";
    }elseif(strlen($name)>=255){
        $error="the massage is,nt must exceed 255";

    }elseif(!is_string($name)||is_numeric($name)){
        $error="the massage must be string";
    }
    return $error;
}
function sanitize($input)
{
    return trim(htmlspecialchars(htmlentities($input)));
}
if(isset($_POST['submit'])){
 
    foreach ($_POST as $key => $value) {
        $$key = sanitize($value);
       
    }
   
$error=[];
    $error['email']= validetemail($email);
    // echo $error['email'];
     $error['phone']= validetephone($phone);
     //echo $error['age'];
     $error['name']=validaename($name);
   
$error['subject']=validaesubject($subject);
    $error['massage']= validaesmassage($massage);
         
   if  (checkErrors($error)){

       $_SESSION['error-massage']=$error;
       header("location:contact.php");
      

      

     }else{
     

      try {
        $dp=new DB("localhost","root",'');
       
        $sql = "INSERT INTO contact_us (name,phone,email,subject,message)
        VALUES ('$name','$phone','$email','$subject','$massage')";
        // use exec() because no results are returned
        
$a= $dp->con->exec($sql);



   
        echo "New record created successfully";
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
  
     
      header("location:index.php");

     }
    
    






   





}