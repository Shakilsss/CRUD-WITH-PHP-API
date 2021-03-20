<?php
include 'vendor/autoload.php';

use App\classes\Get;
use App\classes\Post;
use App\classes\Put;
use App\classes\Delete;

header('Content-type: application/json');

$method= $_SERVER['REQUEST_METHOD'];
switch($method){
	
	case 'GET' :  $get = new GET();
	              $get->getMethod();
				  break;
    case 'POST':
                $post= new Post();
                $data= json_decode(file_get_contents('php://input'), true);
                $post->postMethod($data);
                break;
     case 'PUT':
                $data= json_decode(file_get_contents('php://input'), true);
                $post= new Put();
                $post->putMethod($data);
                break;
       case 'DELETE':
                $data= json_decode(file_get_contents('php://input'), true);
                $post= new Delete();
                $post->deleteMethod($data);
                break;

	default: echo '{"result": "Requested http method not supported here..."}';
}


?>