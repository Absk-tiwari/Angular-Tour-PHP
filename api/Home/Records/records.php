<?php
require '../../database.php';
// print_r($_GET);die;
    $mysqli_result = mysqli_query($mysql, 'SELECT * FROM `student-info`') ;
    $data = [];
    while($row = mysqli_fetch_assoc($mysqli_result)){
        if($row['Name'] != ''){
            $data[] = $row;
        }
    }
    echo json_encode($data);
?>l