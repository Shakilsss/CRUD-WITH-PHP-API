<?php
namespace App\classes;
class DB{

public $conn;
public function __construct(){
$this->conn=mysqli_connect('localhost','root','','api');	
//
//if($this->conn){
//	echo '{"msg":"bal"}';
//}
//else
//die('"msg":"error"'.mysqli_error($this->conn));
}
}
?>