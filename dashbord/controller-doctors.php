<?php

require_once '../helper/creddp.php';
require_once '../helper/valtion.php';

function  validacity($name) 
 {
    $error=null;
    if(empty($name)){
$error="the city required";
    }elseif(strlen($name)>=255){
        $error="the city is,nt must exceed 255";

    }elseif(!is_string($name)||is_numeric($name)){
        $error="dfdfdfd";
    }
    return $error;
}
if(isset($_POST['submit'])){
   
    $n=$_POST['major'];
//    var_dump($_POST);
//    die;
    $name=trim(htmlspecialchars(htmlentities($_POST['name'])));
$city=   trim(htmlspecialchars(htmlentities($_POST[ 'city'])));
$imagename=   $_FILES['image']["name"]; 
$image=   $_FILES['image']; 
$error=[];

$error['name']=validaename($name);
$error['city']= validacity($city);
$error['image']=validetimage($image);


if(checkErrors($error)){
  
    $_SESSION['error-doctors']=$error;
    header("location:creat-doctors.php");

  
}else{
    try {
        $dp=new DB("localhost","root",'');
       
        $sql = "INSERT INTO doctors (name,city,image,major_id)
        VALUES ('$name','$city','$imagename','$n')";
        // use exec() because no results are returned
        
$dp->con->exec($sql);



   
        echo "New record created successfully";
       
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
      
      $conn = null;
    $_SESSION['sucess_cred']="the sucsess created";
    header("location:Doctors.php");

}
}else{
    $_SESSION['method_errors']="the fond errrors"; 
    
}

?>