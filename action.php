<?php 
require_once 'helper/creddp.php';
if(isset($_POST['submet'])){

// if ($_POST['submet']=='Browse Doctors1'){
    session_start();
// }
$p=[];
$dp=new DB("localhost","root",'');
 $l=  $dp->getdata('major');
 $l2= $dp->getdata('doctors');
// var_dump($l2);
// die;
$s=[];

 for($i=0;$i<count($l2);$i++){
    // echo $l2[$i]['major_id'];
    for($j=0;$j<count($l);$j++){ 
   
if($l2[$i]['major_id']===$l[$j]['id']){
$s[]=$l[$j]['id'];

}

 }

 }


$_SESSION['major']=$s;
var_dump($_SESSION['major']);

}
