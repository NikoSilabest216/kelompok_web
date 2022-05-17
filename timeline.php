<?php require_once("auth.php"); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Timeline</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="music.css" />
    <link rel="stylesheet" href="music.js" />
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">

                <div class="card">
                    <div class="card-body text-center">

                        <img class="img img-responsive rounded-circle mb-3" width="160" src="<?php echo $_SESSION['user']['photo'] ?>" />

                        <h3><?php echo  $_SESSION["user"]["name"] ?></h3>
                        <p><?php echo $_SESSION["user"]["email"] ?></p>

                        <p><a href="logout.php">Logout</a></p>
                        <p><a href="/edit.php">Edit Profile</a></p>
                    </div>
                </div>


            </div>


            <div class="col-md-8">

                <?php for ($i = 0; $i < 6; $i++) { ?>
                    <div class="card">
                        <!-- Card image -->
                        <div class="view">
                            <img class="card-img-top" src="https://mdbootstrap.com/wp-content/uploads/2019/02/flam.jpg" alt="Card image cap">
                            <a href="https://bachataurban.com/" target="_blank">
                                <div class="mask gradient-card"></div>
                            </a>
                        </div>
                        <!-- Card content -->
                        <div class="card-body text-center">
                            <h5 class="h5 font-weight-bold"><a href="https://nikosilabest-216.com" target="_blank">Dj Flam</a></h5>
                            <p class="mb-0">Ur Head</p>
                            <audio id="music" preload="true">
                                <source src="https://bachataurban.com/download/2/Stefflon%20Don%20-%2016%20Shots%20(%20DJ%20Flam%20-%20Urban%20Bachata%20remix%20).mp3">
                            </audio>
                            <div id="audioplayer">
                                <i id="pButton" class="fas fa-play"></i>
                                <div id="timeline">
                                    <div id="playhead"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>

        </div>
    </div>

</body>

</html>