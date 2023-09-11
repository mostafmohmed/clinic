<?php include 'inc/header.php' ?>
<?php 
require_once '../helper/creddp.php';
$dp=new DB("localhost","root",'');
$l=  $dp->getdata('major');


?>


<div class="container">
<a   href="creat-major.php"  href="" class="btn btn-primary"  ></a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Last</th>
    </tr>
  </thead>
  <tbody>
    
  <?php foreach($l as $v){ ?>
    
    <tr>
      <th scope="row">3</th>
      <td><?php  echo$v['title'] ?></td>
      <td><?php  echo$v['id'] ?></td>
      <td>
        <a href="updata-major.php?id=<?php  echo$v['id']  ?>"  type="button" class ="btn btn-warning" >edit</a>
        <a href="delet-major.php?id=<?php  echo$v['id']  ?>" type="button" class ="btn btn-danger" >delet</a>
      </td>
    </tr>
    <?php } ?>
 
  </tbody>
</table>
</div>

<?php include 'inc/footer.php' ?>






