<?php
namespace App\classes;

class Get extends DB{


	public function getMethod(){

		$sql="select* from test ";
		$result=mysqli_query($this->conn,$sql);

		if(mysqli_num_rows($result) > 0)
		{
			$rows = array();
			while($r=mysqli_fetch_assoc($result)){

				$rows[] = $r;

			}
			echo json_encode($rows);
		}

		else echo '{"msg": "data not found"}';
		
	}


}

?>