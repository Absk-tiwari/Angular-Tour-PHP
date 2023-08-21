<?php 
require '../database.php';
  
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
 
$query = 'INSERT into crudagain (Name, Email, Mobile, Qualifications) VALUES ( "'.$request->name.'", "'.$request->email.'", "'.$request->mobile.'", \''.(string)json_encode($request->qualifications).'\' )';
 
if(mysqli_query($mysql, $query)){
    echo "Inserted";
}else{
    http_response_code(304);
    die( "can't");
}


?>