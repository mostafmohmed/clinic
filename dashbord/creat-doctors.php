<?php include 'inc/header.php' ?>
<?php 
require_once '../helper/creddp.php';
$dp=new DB("localhost","root",'');
$l=  $dp->getdata('doctors');
  $q=$dp->getdata('major');


?>

<form action="controller-doctors.php"  method="POST" class="form-group"   enctype="multipart/form-data" >
<input type="text"  name='name' class="form-control" >
<?php echo $_SESSION['error-doctors']['name']??null; 
unset($_SESSION['error-doctors']['name']);
?>
<input type="text" name='city'  class="form-control" >
<?php echo $_SESSION['error-doctors']['city']??null ;

unset($_SESSION['error-doctors']['city']);
?>
<label for="formFile" class="form-label">Default file input example</label>
  <input class="form-control" type="file" id="formFile" name="image" >
<?php echo $_SESSION['error-doctors']['image']??null ;
unset( $_SESSION['error-doctors']['image']);

?>
<select name="major" id="cars"  >
  <?php foreach($q as $v){  ?>
  <option value="<?php echo $v['id'] ?>"><?php echo $v['title']  ?></option>
  <?php } ?>
</select>


<input type="submit" name="submit" value="save" class="form-control" >


</form>