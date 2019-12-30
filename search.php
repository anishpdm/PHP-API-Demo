<?php
include 'db.php';

if(isset($_GET['admno'])){



    $admno=$_GET['admno'];
    $r=array();

$sql="SELECT `id`, `name`, `age`, `course`, `admno` FROM `mystudents` where admno=$admno ";

$result=$connection->query($sql);

if($result->num_rows>0){


    while($row=$result->fetch_assoc()){

        $r[]=$row;


    }

    echo json_encode($r);



}
}


?>