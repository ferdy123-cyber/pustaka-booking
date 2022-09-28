<!-- <?php var_dump($list_buku) ?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/style.css' ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="style/css" href="../style.css">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm position-fixed" style="margin-bottom: 20px;">
        <div class="container-fluid" style="width: 95%; max-width: 1100px">
            <a class="navbar-brand" style="margin-right: 80px;" href="#">
                Pustaka
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-0">
                    <li class="nav-item">
                        <a href="<?php echo base_url() ?>" style="font-size: 16px; cursor: pointer;"
                            class="nav-link <?php echo $beranda ?>" aria-current="page">Beranda</a>
                    </li>
                    <li class="nav-item <?php echo $daftar ?>">
                        <a href="<?php echo base_url() . 'user' ?>" style="font-size: 16px; cursor: pointer;"
                            class="nav-link <?php echo $daftar ?>">Daftar</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url() . 'user/login' ?>" style="font-size: 16px; cursor: pointer;"
                            class="nav-link <?php echo $login ?>">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>