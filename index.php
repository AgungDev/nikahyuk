<?php

require_once "modules/user.php";


$fileprofile = file_get_contents('data/profile.json');
$profile = json_decode($fileprofile);

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
    <title><?php echo ucfirst($profile->{"name"}); ?> mau nikah!</title>
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
                            <h5 class="my-3"><?php echo ucfirst($profile->{"name"}); ?></h5>
                            <p class="text-muted mb-1"><?php echo ucfirst($profile->{"pekerjaan"}); ?></p>
                            <p class="text-muted mb-4">From <?php echo ucfirst($profile->{"perusahaan"}); ?></p>
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
                        
                        <nav class="nav flex-column nav-pills ">
                            <a class="abc nav-link active" href="#">Mempelai</a>
                            <a class="abc nav-link" href="#">Tempat</a>
                        </nav>

                    </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div content>
               
            </div>
        </div>
    </div>
</body>
    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/style.js"></script>
    
</html>