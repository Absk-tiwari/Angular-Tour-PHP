<?php
require '../database.php';
$request = json_decode(file_get_contents("php://input"));
if(isset($request) && !empty($request)){

    $email = mysqli_escape_string($mysql, trim($request->username));
    $password = mysqli_escape_string($mysql, trim($request->password));

    $sql = "SELECT * FROM `users` where `email`='$email' AND `password` = '$password'";
    $user_check = "SELECT * FROM `users` where `email`='$email'";

    $result = mysqli_query($mysql, $sql);
    $exists = mysqli_query($mysql, $user_check);

    if(mysqli_num_rows($result)> 0){
        // print_r(($result));
        $rows = array();
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }  
        echo json_encode($rows);
    }else{
        
        if(mysqli_num_rows($exists)> 0){
            echo json_encode(['message' => 'Password is incorrect!']);
            return http_response_code(401);
        }else{ 
            echo json_encode(['message' => 'User doen\'t exists!']);
            return http_response_code(401);
        }
    }
    
}else{
    die ("You came directly through url");
    return http_response_code(403);
}
?>