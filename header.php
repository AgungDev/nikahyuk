<?php

require_once "modules/user.php";

use fun5i\modules\nikahyuk\User;

$profile = new User("kosong");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--BOOTSTRAP CSS-->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title><?php echo ucfirst($profile->getName()); ?> mau nikah!</title>
</head>
<body>
    <div class="row">
        <div class="col-lg-3">
            <div class="jumbotron d-flex align-items-center min-vh-100">
                <div class="container text-center">
                    <!-- profiles -->
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="assets/images/logob.png" alt="avatar"
                            class="rounded-circle img-fluid" style="width: 120px;">
                            <h5 class="my-3"><?php echo ucfirst($profile->getName()); ?></h5>
                            <p class="text-muted mb-1"><?php echo ucfirst($profile->getPekerjaan()); ?></p>
                            <p class="text-muted mb-4">From <?php echo ucfirst($profile->getPerusahaan()); ?></p>
                            <div class="d-flex justify-content-center mb-2">
                            <button type="button" class="btn btn-primary">Donation</button>
                            <button type="button" class="btn btn-outline-primary ms-1">Kontak</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div>
                <div class="jumbotron d-flex align-items-center min-vh-100">
                    
                    <nav class="nav flex-column nav-pills">
                        <a class="mempelai nav-link active" href="index.php">Mempelai</a>
                        <a class="tempat nav-link" href="tempat.php">Tempat</a>
                    </nav>

                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="container">