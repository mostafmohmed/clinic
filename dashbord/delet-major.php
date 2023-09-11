<?php include 'inc/header.php' ?>
<?php 
if(isset($_GET['id']) and !empty($_GET['id']) ){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "clinic";
    $a=$_GET['id'];
    
    try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
    
    
      // sql to delete a record
      $sql = "DELETE FROM major WHERE id = $a ";
    
      // use exec() because no results are returned
      $conn->exec($sql);
      echo "Record deleted successfully";
    } catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }
    
    $conn = null;
   
}
header("location:majors.php")


?>