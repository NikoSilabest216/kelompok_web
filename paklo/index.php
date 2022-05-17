<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .judul {
            text-align: center;
        }

        .avatar {
            vertical-align: middle;
            width: 25px;
            height: 25px;
            border-radius: 50%;
        }

        .avatar-profil {
            vertical-align: middle;
            width: 300px;
            height: 300px;
            border-radius: 50%;
        }

        .grid-container {
            display: grid;
            grid: auto / auto;
            grid-gap: 10px;
            padding: 0;
            background-color: grey;
        }

        .grid-container>div {
            text-align: center;
            padding: 0;
            font-size: 16px;
            color: black;
        }

        .grid-container .item-news .grid-icon {
            display: grid;
            grid: auto / 50px 50px 50px;
            grid-gap: 10px;
            padding: 0;
        }

        .grid-container .item-news .grid-icon>div {
            text-align: center;
            padding: 0;
            font-size: 16px;
            color: black;
        }

    </style>
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
            <a class="nav-link" href="#" style="color:white">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:white">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:white">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="color:white">Dropdown</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="http://nikosilabest-216.com">Home</a></li>
              <li><a class="dropdown-item" href="#">Another link</a></li>
              <li><a class="dropdown-item" href="#">A third link</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <div style="margin-top: 0%;">
        <div class="grid-container">
            
            <div class="item-news">
                <img src="profbck.jpg" width="100%">
            </div>
            
            <div class="item-news">
                <img src="pacarku.jpg" alt="Deva" class="avatar-profil" style="margin-top: -30px;">
            </div>
           
            <div class="item-news">
                <h2 style="margin-top: 5px;color: #333;">Niko Silabest</h2>
            </div>
           
            <div class="item-news">
                <h2 style="margin-top: -20px;color: #333;">202010370311216</h2>
            </div>
           
            <div class="item-news">
                <div class="grid-icon" style="margin-left: 45.5%;">
                    <div class="item-news">
                        <a href="https://www.instagram.com/devaptrsty/">
                            <img src="instagram.png" width="50px" height="50px">
                        </a>
                    </div>
                    <div class="item-news">
                        <a href="https://twitter.com/deva_prata">
                            <img src="discord.png" width="50px" height="50px">
                        </a>
                    </div>
                    <div class="item-news">
                        <a href="https://www.youtube.com/channel/UC5M9aJ4rcpL-n3Z4SoIfXWQ">
                            <img src="yt.png" width="50px" height="50px">
                        </a>
                    </div>
                </div>
            </div>
          
            <div class="item-news">
                <h1 style="color: black;">Nama saya Niko Silabest, Angkatan 2020 Informatika UMM, saya suka dengan web, Pemrograman Web Mudah dan Menyenangkan Bukan? Bukan</h1>
            </div>
        </div>
    </div>

    <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>About</h6>
          <p class="text-justify">NaoPlay <i>Gaming At Its Finest</i> Website Review, Berita, dan Hype Gaming Anda.</p>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Categories</h6>
          <ul class="footer-links">
            <li><a href="">PC Games</a></li>
            <li><a href="">PlayStation</a></li>
            <li><a href="">Gaming Gear</a></li>
            <li><a href="">Top List</a></li>
            <li><a href="">Time Machine</a></li>
            <li><a href="">Mobile Games</a></li>
          </ul>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Links</h6>
          <ul class="footer-links">
            <li><a href="">About Us</a></li>
            <li><a href="">Contact Us</a></li>
            <li><a href="">Contribute</a></li>
            <li><a href="">Privacy Policy</a></li>
          </ul>
        </div>
      </div>
      <hr>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by
            <a href="#">Scanfcode</a>.
          </p>
        </div>
      </div>
    </div>
  </footer>
</body>

<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main-left").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main-left").style.marginLeft = "0";
        document.body.style.backgroundColor = "rgb(33, 32, 32)";
    }
</script>
</html>