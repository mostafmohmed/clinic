<?php include 'inc/header.php' ?>
<?php 
require_once '../helper/creddp.php';
$dp=new DB("localhost","root",'');
$l=  $dp->getdata('doctors');


?>


<div class="container">
<a   href="creat-doctors.php"  href="" class="btn btn-primary"  > creat-doctors </a>

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
      <td><?php  echo$v['city'] ?></td>
      <td>
        <a href="updata-doctors.php?id=<?php  echo$v['id']  ?>"  type="button" class ="btn btn-warning" >edit</a>
        
      

        <a href="delet-doctors.php?id=<?php  echo$v['id']  ?>" type="button" class ="btn btn-danger" >delet</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>

<?php include 'inc/footer.php' ?>