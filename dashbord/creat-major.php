<?php include 'inc/header.php' ?>
<?php 
require_once '../helper/creddp.php';
$dp=new DB("localhost","root",'');
$l=  $dp->getdata('major');
  

?>

<form action="controller.php"  method="POST" class="form-group">
<input type="text" name='name' class="form-control" >
<?php  echo$_SESSION['errossname']??null ?>
<?php  unset($_SESSION['errossname']) ?>

<input type="submit" name="submit" value="save" class="form-control" >


</form>