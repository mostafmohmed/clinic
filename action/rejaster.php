<?php
require_once '../helper/valtion.php';
require_once '../helper/creddp.php';
function chekerrorpage(array $arreay):bool{
    foreach($arreay as $k=>$v){
       if($v!==null){
        return false;
       }
       return true;
    }

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
     $error['phone']= validaepassword($phone);
     //echo $error['age'];
     $error['name']=validaename($name);
     $error['password']=validaepassword($pasword);

     if(chekerrorpage($error)){

       
        try {
            $dp=new DB("localhost","root",'');
           
            $sql = "INSERT INTO users (name, password, phone,email)
            VALUES ('$name', '$pasword', '$phone','$email')";
            // use exec() because no results are returned
            
  $a= $dp->con->exec($sql);



       
            echo "New record created successfully";
          } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
          }
      
          
          $conn = null;
          $users=[
            'passwrs'=>$pasword,
            'name'=>$name,
            'email'=>$email,
            'phone'=>$phone,
          ];
          storeregister( $users);

     }
     header("location:../index.php");
    






   





}