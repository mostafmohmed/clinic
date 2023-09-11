<?php include 'inc/header.php' ?>

<?php 
require_once '../helper/creddp.php';
$dp=new DB("localhost","root",'');
$l=  $dp->getdata('contact_us');


?>



<div class="container">
<a   href="creat-doctors.php"  href="" class="btn btn-primary"  > massage </a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
     
    </tr>
  </thead>
  <tbody>
  <?php foreach($l as $v){ ?>
    
    <tr>
      <th scope="row">3</th>
      <td><?php  echo$v['name'] ?></td>
      <td><?php  echo$v['email'] ?></td>
      <td><?php  echo$v['message'] ?></td>
      <td><?php  echo$v['phone'] ?></td>
      
      <td>
        
        <a href="" type="button" class ="btn btn-danger" >delet</a>
      </td>
    </tr>
    <?php } ?>
  
  </tbody>
</table>
</div>





<?php include 'inc/footer.php' ?>