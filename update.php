<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "vizsgamunka");

if(isset($_POST['update_data'])){
    $id = $_POST['cikkek_id'];
    $cim = $_POST['cim'];
    $tartalom = $_POST['tartalom'];
    $megjelenes = $_POST['megjelenes'];
    $szerzo = $_POST['szerzo'];
    $tagek = $_POST['tagek'];

    $query = "UPDATE tag SET tagek='$tagek' WHERE id='$id'";
    $query_run = mysqli_query($con, $query);

    $query1 = "UPDATE szerzo SET szerzo_neve='$szerzo' WHERE id='$id'";
    $query_run = mysqli_query($con, $query1);

    $query2 = "UPDATE cikkek SET cim='$cim', tartalom='$tartalom', megjelenes_datuma='$megjelenes' WHERE id='$id'";
    $query_run = mysqli_query($con, $query2);

    if($query_run){
        $_SESSION['status'] = "Data Updated Successfully";
        header("Location: admin.php");
        exit();
    }
    else{
        $_SESSION['status'] = "Not Updated";
        header("Location: admin.php");
        exit();
    }

}

?>