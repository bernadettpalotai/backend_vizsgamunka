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
    <link rel="stylesheet" href="/style.css">
    <title>F1 Blog</title>
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

    <!--CONTENT START-->

    <div id="container">
        <div class="content">
            <?php require 'getPage.php' ?>
        </div>
    </div>

    <!--CONTENT END-->

    <!--FOOTER START-->

    <footer class="footer-container">

        <div id="fContainer1">
            <p class="copy"><img src="/img/F1_blog_logo.png" width="100px" alt="Logó">
                &copy; F1 Blog 2023. Minden jog fenntartva.</p>
        </div>
        <div id="fContainer2">
            <p class="kapcsolat">Kapcsolat:</p>
            <p class="kapcs">1054 Budapest, Első utca 3. <br>
                +36-20-111-222 <br>
                info@f1blog.hu <br></p>
        </div>
        <div id="fContainer3">
            <p class="tovabbi-info">További információk:</p>
            <a class="policies" href="https://policies.google.com/privacy?hl=hu">Adatvédelmi Tájékoztató</a>
            <br>
            <a class="policies" href="https://policies.google.com/terms?hl=hu">Általános Szerződési
                Feltételek</a>
            <p class="forrasok">Képforrások:<br>
                <a href="https://www.pexels.com/hu-hu/">| pexels.com</a>
                <a href="https://unsplash.com/">| unsplash.com</a>
                <a href="https://hum3d.com/">| Hum3D.com</a>
                <a href="https://logodownload.org/">| logodownload.org</a>
            </p>
        </div>

    </footer>

    <!--FOOTER END-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>