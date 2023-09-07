<?php 
error_reporting(0);
require '../database.php';

    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
    
    if(isset($postdata) && !empty($postdata) ){
        $name = mysqli_real_escape_string($mysql, trim($request->name));
        $email = mysqli_real_escape_string($mysql, trim($request->email));
        $password = mysqli_real_escape_string($mysql, trim($request->pwd));
         
        if($name == "" || $email == "" || $password == ""){
            echo json_encode(['message' => "Enter valid details!"]);
            return http_response_code(500);
        }
        $sql = " INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES (NULL, '$name', '$email', '$password')";

        if($res= mysqli_query($mysql,$sql)){
            $created = [
                'name' => $name,
                'email' => $email,
                'password' => $password
            ];
            return $created;
        }else{
            echo json_encode(['message' => "Can't Register the user!"]); 
        }

    }

?>