<?php
    session_start();
    include 'conn.php';

    $mt = $_POST ['mt'];
    $ph = $_POST ['ph'];
    $ja = $_POST ['ja'];
    $csa = $_POST ['csa'];
    $id = $_SESSION['id'];
    $tot = $mt + $ph + $ja + $csa;

    $msg = [];

    $sql = "UPDATE  `judge_1` SET `execution` = '$mt',`choreography` = '$ph',`chant` = '$ja',`costume` = '$csa',`total` = '$tot' WHERE `id` = '$id'";

    $query = $con->query($sql);

    if($query == true){
        $msg['status'] = true;
        $msg['message'] = "Submitted";
    }else{
        $msg['status'] = false;
        $msg['message'] = "Failed";
    }
    echo json_encode($msg);

?>
