<!DOCTYPE html>
<html>
<head>
	<title><?= $title ?></title>
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<!-- -----------------------------------------------------NAVBAR-------------------------------------------------------- -->

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">IM APP</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">

                                                      <!-- Link -->

            <a class="nav-item nav-link <?php if (stripos($_SERVER['REQUEST_URI'], 'home')){echo 'active';} ?> " href="<?= base_url(); ?>home">Home <span class="sr-only">(current)</span></a>


            <a class="nav-item nav-link <?php if (stripos($_SERVER['REQUEST_URI'], 'mahasiswa')){ echo 'active';} ?> " href="<?= base_url(); ?>mahasiswa">Mahasiswa</a>

            <a class="nav-item nav-link <?php if (stripos($_SERVER['REQUEST_URI'], 'people')){ echo 'active';} ?> " href="<?= base_url(); ?>people">Peoples</a>

            <a class="nav-item nav-link <?php if (stripos($_SERVER['REQUEST_URI'], 'about')){ echo 'active';} ?> " href="<?= base_url(); ?>about">About</a>

                                                      <!-- Link -->

        </div>
      </div>
    </div>
</nav>

<!-- ------------------------------------------------------------------------------------------------------------------- -->
