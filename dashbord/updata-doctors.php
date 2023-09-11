<?php include 'inc/header.php' ?>
<?php 
require_once '../helper/creddp.php';
require_once '../helper/valtion.php';
function  validaecity($name) 
{
   $error=null;
   if(empty($name)){
$error="the city required";
   }elseif(strlen($name)>=255){
       $error="the city is,nt must exceed 255";

   }elseif(!is_string($name)||is_numeric($name)){
       $error="the city must bb is string";
   }
   return $error;
}
function chekerrorpage(array $arreay):bool{
    foreach($arreay as $k=>$v){
       if($v!==null){
        return false;
       }
       return true;
    }

}
$d=$_GET['id'];
if(isset($_GET['id'])){
    $a=$_GET['id'];
   
$dp=new DB("localhost","root",'');
$l=  $dp->getdata('doctors','*',"id=$a" );
var_dump($l);
  

?>


<h1> updata </h1>
<form action=""  method="POST" class="form-group" enctype="multipart/form-data" >
    <?php foreach ($l as $v) {?>
<input type="text" name='name' value="<?php $v['name'] ?>"  class="form-control" >
<?php    echo $_SESSION['errors-updatadostor']['name']??null ?>
<input type="text" name='city' value="<?php $v['city'] ?>"  class="form-control" >
<?php    echo $_SESSION['errors-updatadostor']['city']??null ?>
<label for="formFile" class="form-label"> <?php $v['image'] ?> </label>
  <input class="form-control" type="file" id="formFile" name="image" >
  <?php  echo   $_SESSION['errors-updatadostor']['image']??null ?>

<?php }?>




<input type="submit" name='submit' value="save" class="form-control" >
 <?php $_SESSION['methoed-error-updatadoctors']??null;
 unset($_SESSION['methoed-error-updatadoctors']);
 
 ?>


</form>
<?php } ?>


<?php 


if(isset($_POST['submit'])) {
  
    
    $name=trim(htmlspecialchars(htmlentities($_POST['name'])));
    $city=trim(htmlspecialchars(htmlentities($_POST['city'])));
    $image=$_FILES["image"];
    

    $imagename=$_FILES["image"]["name"];

    $error=[];
    
    $error['name']= validaename($name);
    $error['city']=   validaecity($city);
    $error['image']=validetimage($image);
    
   


    if(chekerrorpage($error)){
       
    try {
        // $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $dp=new DB("localhost","root",'');
       
        $sql = "UPDATE doctors SET name='$name', city='$city', image='$imagename'  WHERE id=$d";
      
        // Prepare statement
        $dp->con->prepare($sql)->execute();
        // $stmt = $conn->prepare($sql);
      
        // // execute the query
        // $stmt->execute();
      
        // echo a message to say the UPDATE succeeded
         $sucess= " records UPDATED successfully";
       
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
      
      $conn = null;
      

      header("location:Doctors.php");


    }else{
       
      
        $_SESSION['errors-updatadostor']=$error;
    }



    ?>


    <?php }else{

$_SESSION['methoed-error-updatadoctors']="didint post";

    } ?>