<div id="sql-container">

    <?php
    require_once('./dbconfig.php');

    //$conn = mysqli_connect($servername, $username, $password, $dbname);
    $conn = new mysqli($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT cikkek.cim, cikkek.tartalom, cikkek.megjelenes_datuma, szerzo.szerzo_neve, tag.tagek FROM cikkek
            JOIN szerzo ON(cikkek.szerzo_id = szerzo.id)
            JOIN tag ON(cikkek.tag_id = tag.id)";
    //$result = mysqli_query($conn, $sql);
    $result = $conn -> query($sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            ?>
            <div class="card-container">
                <div class="row row-cols-3 g-3">
                    <?php
                    //while ($row = mysqli_fetch_assoc($result)) {
                        while ($row = $result -> fetch_assoc()){
                    ?>
                        <div class="col">
                            <div class="card border-dark text-light mb-3">
                                <div class="card-header bg-light border-dark"><b>Szerző:</b>
                                    <?= $row["szerzo_neve"] ?>
                                </div>
                                <div class="card-body bg-light text-dark">
                                    <h5 class="card-title">
                                        <?= $row["cim"] ?>
                                    </h5>
                                    <p class="card-text">
                                        <?= $row["tartalom"] ?>
                                    </p>
                                    <p class="card-tag">
                                        <?= $row["tagek"] ?>
                                    </p>
                                </div>
                                <div class="card-footer border-dark"><b>Megjelenés:</b>
                                    <?= $row["megjelenes_datuma"] ?>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>

            <?php
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

    ?>

</div>