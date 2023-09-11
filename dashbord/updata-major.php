<?php include 'inc/header.php' ?>
<?php 
require_once '../helper/creddp.php';
$d=$_GET['id'];
if(isset($_GET['id'])){
    $a=$_GET['id'];
   
$dp=new DB("localhost","root",'');
$l=  $dp->getdata('major','*',"id=$a" );
var_dump($l);
  
session_start();
?>


<h1> updata </h1>
<form action=""  method="POST" class="form-group">
    <?php foreach ($l as $v) {?>
<input type="text" name='name' value="<?php echo $v['title'] ?>"  class="form-control" >
<?php }?>




<input type="submit" name='submit' value="save" class="form-control" >


</form>
<?php } ?>


<?php if(isset($_POST['submit'])) {
    
    $name=trim(htmlspecialchars(htmlentities($_POST['name'])));
   
   



    try {
        // $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $dp=new DB("localhost","root",'');
       
        $sql = "UPDATE major SET title='$name' WHERE id=$d";
      
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



if(isset($sucess)){

    header("location:majors.php?id=$d");
}



    ?>


    <?php } ?>