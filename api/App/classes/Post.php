<?php
namespace App\classes;
class Post extends DB
{
      public  $name;
      public   $email;
      public   $phone;
     public function postMethod($data){

//         $name=$data[''];
        $name= $this->name=$data['name'];
        $email= $this->email=$data['email'];
        $phone= $this->phone=$data['phone'];
         $sql = "insert into test(`name`,email,phone,create_time) values ('$name','$email','$phone',NOW() )";
         $insert=mysqli_query($this->conn,$sql);
         if($insert){
             echo '{"msg":"data insert Successfully"}';
         }
         else
             echo '{"msg":"sql problem"}';
     }
}