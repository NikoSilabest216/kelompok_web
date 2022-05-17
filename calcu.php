<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="\assets\images\css\style.css">  
  <meta charset="utf-8">
    <title>Calculator</title>
    <link href="calcu.css" rel="stylesheet">
    <script src="calcu.js" defer></script>
  </head>
  <body>

  
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <div id="main-left">
                <span style="font-size:30px;cursor:pointer; color:white;" onclick="openNav()">&#9776;</span>
            </div>

            <div id="mySidenav" class="sidenav-left">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="#">About</a>
                <a href="#">Services</a>
                <a href="#">Clients</a>
                <a href="#">Contact</a>
            </div>

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
            </div>
        </div>
    </nav>

    <div class="calculator-grid">
    <div class="output">
    <div data-previous-operand class="previous-operand"></div>
    <div data-current-operand class="current-operand"></div>
    </div>
    <button data-all-clear class="span-two">AC</button>
    <button data-delete>DEL</button>
    <button data-operation>÷</button>
    <button data-number>1</button>
    <button data-number>2</button>
    <button data-number>3</button>
    <button data-operation>*</button>
    <button data-number>4</button>
    <button data-number>5</button>
    <button data-number>6</button>
    <button data-operation>+</button>
    <button data-number>7</button>
    <button data-number>8</button>
    <button data-number>9</button>
    <button data-operation>-</button>
    <button data-number>.</button>
    <button data-number>0</button>
    <button data-operation>%</button>
    <button data-operation>^</button>
    <button data-equals class="span-two" style="width: 400px; height: 100px;">=</button>

    </div>

  </body>
</html>