<?php
    session_start();
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid d-flex justify-content-between">
        <img src="img/icon.png" alt="" width="40px">
        <a class="navbar-brand" href="#">PenDown</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <hr>
        <?php
            if(isset($_SESSION['verified_user_id']))
            {
        ?>
        <div class="row d-flex justify-content-center w-100">
            <form class="col-sm-12 col-md-12 col-lg-6">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            </form>
        </div>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
            </li>
        </ul>
        <?php
            }
            else
            {
                ?>
                <div class="btn-group ms-auto float-end" role="group" aria-label="Basic checkbox toggle button group" style="z-index: 100;">
                    <button class="btn-check" id="btncheck1" autocomplete="off"></button>
                    <label class="btn btn-outline-dark px-4" for="btncheck1">Login</label>

                    <button class="btn-check" id="btncheck1" autocomplete="off"></button>
                    <label class="btn btn-outline-dark px-4" for="btncheck1">Register</label>
                </div>
                <?php
            }
        ?>
        </div>
    </div>
</nav>