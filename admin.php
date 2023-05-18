<?php
session_start();
if (!$_SESSION['loggedIn']) {
    //átírányítás
    header('Location: admin-bejelentkezes.php');
}
include("code.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="icon" href="/img/F1_blog_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./style.css">
    <title>Admin</title>
</head>

<body>

    <!--NAV START-->

    <div class="nav-container">
        <nav class="navbar fixed-top navbar-expand-lg" data-bs-theme="dark" style="background-color: #000000de;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="/img/F1_blog_logo.png" alt="Logo" width="40" height="35"
                        class="d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/kezdolap">Kezdőlap</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/hirek">Hírek</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/versenynaptar">Versenynaptár</a>
                        </li>
                        <li class="nav-item-admin">
                            <a class="nav-link" href="/admin-bejelentkezes">Admin</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!--NAV END-->

    <!-- ADMIN START -->

    <div id="admin-container">

        <div class="uj-container">

            <form id="uj-form" action="insert.php" method="POST">

                <h2>Új cikk hozzáadása</h2>

                <div class="uj mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Cím</label>
                    <input type="text" name="adat1" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="uj mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Tartalom</label>
                    <textarea class="form-control" name="adat2" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="uj mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Megjelenés dátuma</label>
                    <input type="text" class="form-control" name="adat3" id="exampleFormControlInput1">
                </div>
                <div class="uj mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Szerző</label>
                    <input type="text" class="form-control" name="adat4" id="exampleFormControlInput1">
                </div>
                <div class="uj mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Tagek</label>
                    <input type="text" class="form-control" name="adat5" id="exampleFormControlInput1">
                </div>
                <button type="submit" class="btn btn-dark">Küldés</button>

            </form>

        </div>

        <div class="meglevo-container">

            <form id="meglevo-form" action="update.php" method="POST">

                <h2>Meglévő cikk szerkesztése</h2>

                <div class="meglevo mb-3">
                    <label for="" class="form-label">Cikkek ID</label>
                    <select name="cikkek_id" class="form-select" aria-label="Default select example">
                        <option selected>Válassz ID-t</option>
                        <?php
                        foreach ($options as $option) {
                        ?>
                            <option value="<?php echo $option['id']; ?>"><?php echo $option['id']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="meglevo mb-3">
                    <label for="" class="form-label">Cím</label>
                    <input type="text" name="cim" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="meglevo mb-3">
                    <label for="" class="form-label">Tartalom</label>
                    <textarea class="form-control" name="tartalom" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="meglevo mb-3">
                    <label for="" class="form-label">Megjelenés dátuma</label>
                    <input type="text" class="form-control" name="megjelenes" id="exampleFormControlInput1">
                </div>
                <div class="meglevo mb-3">
                    <label for="" class="form-label">Szerző</label>
                    <input type="text" class="form-control" name="szerzo" id="exampleFormControlInput1">
                </div>
                <div class="meglevo mb-3">
                    <label for="" class="form-label">Tagek</label>
                    <input type="text" class="form-control" name="tagek" id="exampleFormControlInput1">
                </div>
                <button type="submit" name="update_data" class="btn btn-dark">Küldés</button>

            </form>

            <?php
            /*if (isset($_SESSION['status'])) {
                echo "<h4>" . $_SESSION['status'] . "</h4>";
                unset($_SESSION['status']);
            }*/
            ?>

        </div>

        <div class="torles-container">
            <form id="torles-form" action="delete.php" method="POST">

                <h2>Cikk törlése ID szerint</h2>

                <div class="torles mb-3">
                    <label for="" class="form-label">Cikkek ID</label>
                    <select name="cikkek_id1" class="form-select" aria-label="Default select example">
                        <option selected>Válassz ID-t</option>
                        <?php
                        foreach ($options as $option) {
                            ?>
                            <option value="<?php echo $option['id']; ?>"><?php echo $option['id']; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <button type="submit" name="delete_data" class="btn btn-dark">Törlés</button>

            </form>

            <?php
            /*if (isset($_SESSION['status'])) {
                echo "<h4>" . $_SESSION['status'] . "</h4>";
                unset($_SESSION['status']);
            }*/
            ?>

        </div>

    </div>

    <!-- ADMIN END -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>

</body>

</html>