<?php
require_once '../helper/valtion.php';
require_once '../helper/creddp.php';
$a= $_SESSION['booking']??null;


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
     $error['phone']=         validetephone ($phone);
     //echo $error['age'];
     $error['name']=validaename($name);
 
     
     if(checkErrors($error)){
        $_SESSION['error booking']=$error;
       
       
       
      
        header("location:doctor.php?id=$id");
        

          
     }else{


        try {
            $dp=new DB("localhost","root",'');
           
            $sql = "INSERT INTO booking (name, email, phone,doctor_id)
            VALUES ('$name', '$email','$phone','$id')";
            // use exec() because no results are returned
            
$dp->con->exec($sql);



       
            echo "New record created successfully";
            
          } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
          }
          
          $conn = null;
          session_start();
       var_dump($_SESSION);
        $m=$_SESSION['return-majors']??null;
      
        header("location:index.php?id=$m");
       
       


        
     }
  


     
   




}