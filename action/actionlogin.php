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
    echo"hhhhh";

    
   
   
        foreach ($_POST as $key => $value) {
            $$key = sanitize($value);
           
        }
       
    $error=[];
        $error['email']= validetemail($email);
        
        
         $error['password']=validaepassword($password);
    
         if(chekerrorpage($error)){
    
           
            // $dp=new DB("localhost","root",'');
            // $a=$d->getdata('users');
            // var_dump($a);
$d=new DB("localhost","root",'');
$f=$d->getdata('users');
foreach($f as $v){
    if($v["email"]==$email and $v["password"]==$password){
       

       $_SESSION['role']=$v["type"];
        storeregister($v);
       
  
   
        
    }
}
header("location:../index.php");
    
         }  
       
     
    
    
    
    
    
    
       
    
    
    
    
    
    
    
}