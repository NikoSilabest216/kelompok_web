<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="\assets\images\css\shop.css">
    <link rel="stylesheet" href="\assets\images\css\style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/62432378e8.js" crossorigin="anonymous"></script>

</head>

<body style="background-color: white;">

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">


            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="paklo\index.php" style="color:white">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="calcu.php" style="color:white">Calculator</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="list.php" style="color:white">GameShop</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="color:white">Dropdown</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="http://nikosilabest-216.com">Home</a></li>
                            <li><a class="dropdown-item" href="#">Category</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                        </ul>
                    </li>

                </ul>
                <div style=" width: 100%; display:flex; justify-content:flex-end;">
                    <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category" style="width: 25%;">
                    <button class="btn btn-primary" id="btn3" style="height: 60px;">
                        Alphabet
                    </button>
                    <button class="btn btn-primary" id="btn4" style="height: 60px;">
                        Rating
                    </button>

                    <button class="btn btn-primary" id="myBtn" style="height: 60px;">
                        Add
                    </button>

                </div>
            </div>
        </div>
    </nav>
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <label for="fname">Title</label>
            <input type="text" id="fname" name="Game Title" placeholder="Game Title">

            <label for="lname">Rating Game</label>
            <input type="text" id="lname" name="Rating" placeholder="Rating" >
            <button class="btn btn-primary" id="btnAdd" style="height: 60px;">
                Submit
            </button>
        </div>
    </div>

    <div id="list">
        <div id="gamelist" class="flex-wrap2">
            
        </div>
    </div>
</body>

<script src="\assets\js\script.js"></script>
</html>