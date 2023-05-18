<?php
    session_start();

    require_once('./dbconfig.php');

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Kapcsolódási hiba: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $adat1 = $_POST["adat1"];
        $adat2 = $_POST["adat2"];
        $adat3 = $_POST["adat3"];
        $adat4 = $_POST["adat4"];
        $adat5 = $_POST["adat5"];

        $tag = "INSERT INTO tag (id, tagek) VALUES ('', '$adat5')";
        $conn->query($tag);
        $lastTagId = $conn->insert_id;

        $szerzo = "INSERT INTO szerzo (id, szerzo_neve) VALUES ('', '$adat4')";
        $conn->query($szerzo);
        $lastSzerzoId = $conn->insert_id;

        $cikkek = "INSERT INTO cikkek (id, cim, tartalom, megjelenes_datuma, szerzo_id, tag_id)
                    VALUES ('', '$adat1', '$adat2', '$adat3', '{$lastSzerzoId}', '{$lastTagId}')";

        //$query = $conn->query($cikkek);
    
        if ($conn->query($cikkek) === TRUE) {
            echo "Az adat sikeresen mentve a vizsgamunka táblába.";
            header('Location: admin.php');
        } else {
            echo "Hiba az adat mentésekor: " . $conn->error;
        }
    
    }

    $conn->close();

    ?>
