<?php include 'inc/header.php' ?>

<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clinic";
$k=[];
try {
  $conn = new  PDO("mysql:host=$servername;dbname=clinic",$username,$password);
 
  $stmt = $conn->query("SELECT *,booking.name AS namephent,booking.doctor_id AS deletnama ,booking.id AS daletid
  FROM booking
  INNER JOIN doctors ON  booking.doctor_id   =  doctors.id");
 $result = $stmt-> fetchAll(PDO::FETCH_ASSOC);
$k=$result;

  // set the resulting array to associative
  
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
?>



<div class="container">
<a   href="creat-doctors.php"  href="" class="btn btn-primary"  > creat-doctors </a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Lt</th>
     
    </tr>
  </thead>
  <tbody>
    
  <?php foreach($k as $v){ ?>
    
    <tr>
      <th scope="row">3</th>
      <td><?php  echo$v['name'] ?></td>
      <td><?php  echo$v['namephent'] ?></td>
      <td><?php  echo$v['created_at'] ?></td>
      <td><?php  echo$v['deletnama'] ?></td>

      <td>Mark</td>
      <td>
        
        <a href="delet-Booking.php?id=<?php echo$v['daletid'] ?>" type="button" class ="btn btn-danger" >delet</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>


<?php include 'inc/footer.php' ?>