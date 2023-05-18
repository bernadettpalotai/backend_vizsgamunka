<?php
require_once('./dbconfig.php');

/*$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) {
    die("Kapcsolódási hiba: " . $con->connect_error);
}*/

$con = mysqli_connect("localhost", "root", "", "vizsgamunka");

$select = "SELECT id FROM cikkek";
$result = $con->query($select);
if ($result->num_rows > 0) {
    $options = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

?>