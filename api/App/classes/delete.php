<?php
namespace App\classes;

class Delete extends DB
{
    public $id;
   public function deleteMethod($data){

       $id =$this->id=$data["id"];

    $sql = "DELETE FROM test WHERE id = $id";

    if (mysqli_query($this->conn, $sql)) {
        echo '{"result": "Success"}';
    } else {
        echo '{"result": "Sql error"}';
    }
   }
}