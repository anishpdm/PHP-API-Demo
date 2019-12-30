<?php
include 'db.php';

if(isset($_GET['name'])){

    $r=array();


    $name=$_GET['name'];
    $admno=$_GET['admno'];
    $course=$_GET['course'];
    $age=$_GET['age'];

    $sql="INSERT INTO `mystudents`( `name`, `age`, `course`, `admno`) VALUES
    ('$name',$age,'$course','$admno')";

    $result=$connection->query($sql);

    if($result===TRUE){

        $r['status']="success";


    }
    else{
        $r['status']="error";
    }


echo json_encode($r);


}


?>