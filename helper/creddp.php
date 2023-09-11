
<?php
class DB{
  public $con;
function __construct($servername,$username,$password)
{
    $this->con=new PDO("mysql:host=$servername;dbname=clinic",$username,$password);
    
}
function getdata($table,$col='*',$filter=true){
$query =" SELECT $col FROM $table WHERE $filter";
$sql=$this->con->query($query);
return $sql->fetchAll(PDO::FETCH_ASSOC);
}

function creat($table,$data){
$pattern='/([^,]+)/';
$col_replesment='`$1`';
$val_replesment="`$1`";
$col=preg_replace($pattern,$col_replesment,implode(',',array_keys($data)));
$val=preg_replace($pattern,$val_replesment,implode(',',array_values($data)));
echo $col."<br>";
echo $val ;
$query="INSERT INTO $table ($col) VALUES ($val) ";
// echo $query;
// die;
// $sql=$this->con->prepare($query);
// return $sql->execute();
  return $this-> con->exec($query);

    }


}