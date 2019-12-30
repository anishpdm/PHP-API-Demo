<?php
include 'db.php';

$r=array();

$sql="SELECT `id`, `name`, `age`, `course`, `admno` FROM `mystudents`";

$result=$connection->query($sql);

if($result->num_rows>0){


    while($row=$result->fetch_assoc()){

        $r[]=$row;


    }

    echo json_encode($r);



}


?>