<?php
namespace App\classes;
class Put extends DB
{
     public function putMethod($data){
         $id=$data['id'];
         $name=$data['name'];
         $email=$data['email'];
         $phone=$data['phone'];
//         $name=$data[''];

       $sql = "UPDATE test SET name = '$name', phone = '$phone', email = '$email', create_time = NOW() WHERE id = '$id'";

         if(mysqli_query($this->conn,$sql)){
             echo '{"msg":"data updated Successfully"}';
         }
         else
             echo '{"msg":"sql problem"}';
     }
}
