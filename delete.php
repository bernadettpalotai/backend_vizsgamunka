<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "vizsgamunka");


if (isset($_POST['delete_data'])) {
    $id = $_POST['cikkek_id1'];

    $query1 = "DELETE FROM cikkek WHERE id='{$id}'";
    $query_run = mysqli_query($con, $query1);

    $query2 = "DELETE FROM szerzo WHERE id='$id'";
    $query_run = mysqli_query($con, $query2);

    $query3 = "DELETE FROM tag WHERE id='$id'";
    $query_run = mysqli_query($con, $query3);

    if ($query_run) {
        $_SESSION['status'] = "Data Deleted Successfully";
            header("Location: admin.php");
            exit();
    } else {
        $_SESSION['status'] = "Not Deleted";
            header("Location: admin.php");
            exit();
    }
}
?>
