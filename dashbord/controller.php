<?php
session_start();
require_once '../helper/creddp.php';
require_once '../helper/valtion.php';

if(isset($_POST['submit'])){
    $name=trim(htmlspecialchars(htmlentities($_POST['name'])));
$errors=[];
$errors['name']=validaename($name);


    if( checkErrors($errors)){
$_SESSION['errossname']=$errors['name'];
header("location:creat-major.php");

    }

   else{
    try {
      $dp=new DB("localhost","root",'');
     
      $sql = "INSERT INTO major (title)
      VALUES ('$name')";
      // use exec() because no results are returned
      
$dp->con->exec($sql);



 
      echo "New record created successfully";
    } catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }
    
    $conn = null;
  $_SESSION['sucess_cred']="the sucsess created";
  header("location:majors.php");
   }
}else{
    $_SESSION['method_errors']="the sucsess created"; 
    
}

?>