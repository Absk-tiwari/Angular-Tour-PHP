<?php 
require '../../database.php';

$request = json_encode($_POST);

if(isset($request)){ 
    $request = json_decode($request);
    // var_dump($request);
    if($request->name =='' || $request->email == '' || $request->password == '' ){
        return http_response_code(400);
        die('Couldn\'t update ~');
    }else{
        $sql = "UPDATE users set `name` = ".$request->name." , `email`=".$request->email.", `password`= ".$request->password." , `profile`=".$request->profile."  WHERE `user_id`=".$request->user_id."";
        if($update = mysqli_query($mysql, $sql) && mysqli_affected_rows($mysql)>0){
                return http_response_code(200);
        }
    }

}else{
    http_response_code(401);
    die('it\'s a direct hit~');
}
?>