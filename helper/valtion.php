<?php
session_start();
function validetemail($email)
{
    $error=null;
    if(empty($email)){
        $error="the email requierd";
    }elseif(filter_var($email,FILTER_VALIDATE_EMAIL)==false){
        $error="the email not valited";
    }elseif(strlen($email)>=255){
        $error="xvvv";
    }
    return $error;
}

function validetephone($age) 
{
    $error=null;
    if(empty($age)){
       $error="the phone requred";
    }
    if(is_numeric($age)){
       $age=(int)$age;
    }
     if(! is_int($age)){
        $error="the age must be number";
    }elseif($age<0){
        $error="the age must be esceed 0";
    }
    return $error;

    
}
 function  validaename($name) 
 {
    $error=null;
    if(empty($name)){
$error="the name required";
    }elseif(strlen($name)>=255 or strlen($name)<=5 ){
        $error="the name is,nt must exceed 255";

    }elseif(!is_string($name)||is_numeric($name)){
        $error="dfdfdfd";
    }
    return $error;
}
function validaepassword($name) 
 {
    $error=null;
    if(empty($name)){
$error="the name required";
    }elseif(strlen($name)>=255 ){
        $error="the name is,nt must exceed 255";

    }elseif(!is_string($name)||is_numeric($name)){
        $error="dfdfdfd";
    }
    return $error;
}
function storeregister(array $user){
    $_SESSION['users']=$user;
    $_SESSION['is_loged_in']=true;
    }
    
    
    function checkErrors($errors)
{
    foreach ($errors as $error) {
        if (isset($error)) {
            return true;
        }
    }
    return false;
}

    
    function chekIslogin():bool
    {
        return isset($_SESSION['is_loged_in'])&&$_SESSION['is_loged_in']===true;
    }
    function validetimage($imagee): ?string
    {
        $error=null;
        $sizeimage=$imagee['size']/(1024*1024);
        if($imagee['error']!=0){
            $error="iamge requred";
        }elseif(explode("/",$imagee['type'])[0]!="image"){
            $error="file must be image";
        }elseif( $sizeimage>1){
            $error="the file must,nt be >1";
        }
        return $error;
    
    }
function uploadImage($image)
{
    $image_tmp_name = $image['tmp_name'];
    $image_name = $image['name'];
    $name_array = explode('.', $image_name);
    $extension = end($name_array);
    $img_name =  time() . rand(100, 10000) . "." . $extension;
    move_uploaded_file($image_tmp_name, "../img/$img_name");
    return $img_name;
}