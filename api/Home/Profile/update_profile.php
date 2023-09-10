<?php 
require '../../database.php';
header('Content-Transfer-Encoding: binary');
$request = json_encode($_POST);
$file = $_FILES;

if(isset($request)){ 
    $request = json_decode($request);
    // var_dump($request);
    if($request->name =='' || $request->email == ''){
        return http_response_code(400);
        // die('Couldn\'t update ~');
    }else{
        $sql = "UPDATE users set name = '".$request->name."' , email='".$request->email."'" ;
        if(count($file)>0){
            $filename = $_FILES['profile']['tmp_name'];
            $type = pathinfo($_FILES['profile']['name'], PATHINFO_EXTENSION);
            $data = file_get_contents($filename);
            $base64 = 'data:image/' . $type . ';base64,' .base64_encode($data); 
            
            $sql.=", profile='". $base64 ."' "; 
        }
        $sql.= " WHERE id =".$request->user_id." ";
      
        $update = mysqli_query($mysql, $sql);
        if (!$update) {
            // query failed
            $error = mysqli_error($mysql);
            echo "Error: $error";die;
        }else{
            if(count($file) > 0){
               echo json_encode(['profile'=> $base64]);
            }
        }
    }

}else{
    http_response_code(401);
    die('it\'s a direct hit~');
}
?>