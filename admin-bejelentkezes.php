<div class="form-container">

    <form method="POST">
        <p class="login">Bejelentkezés az oldal admin felületére</p>
        <div class="form-floating mb-3">
            <input type="user" id="user" name="user" class="form-control" id="floatingInput"
                placeholder="Felhasználónév">
            <label for="floatingInput">Felhasználónév</label>
        </div>
        <div class="form-floating">
            <input type="password" id="password" name="password" class="form-control" id="floatingPassword"
                placeholder="Jelszó">
            <label for="floatingPassword">Jelszó</label>
        </div>
        <button type="submit" class="btn btn-dark">Belépés</button>
        <?php print(isset($_SESSION['error']) ? $_SESSION['error'] : ''); ?>
    </form>

    <?php
    if (isset($_POST['user']) && isset($_POST["password"])) {
        require_once('fv.php');
        $user = $_POST['user'];
        $password = $_POST['password'];
        //ellenőrzés !!!!
        $adatok = getUserData($user);
        if (count($adatok) > 0) {
            if (password_verify($password, trim($adatok[1])) === true) {
                $_SESSION['loggedIn'] = true;
                unset($_SESSION['error']);
                header('Location: admin.php');
            }
        }
        $_SESSION['error'] = "A felhasználó név vagy a jelszó nem megfelelő!";
    }
    ?>

</div>