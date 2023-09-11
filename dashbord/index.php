<?php include 'inc/header.php' ?>

<?php
require_once '../helper/creddp.php';
 $dp=new DB("localhost","root",'');
 $l=  $dp->getdata('users',"count(id)  as ff ");
 
 ?>
<div class="container d-flex justify-content-center"   >
<?php foreach($l as $v){ ?>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Doctors</h5>
    <p class="card-text"><?php echo$v['ff'] ?></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<?php } ?>

<div class="card m-4" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">users</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>


<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">booking</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>


</div>



<?php include 'inc/footer.php' ?>