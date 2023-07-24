<?php
    session_start();
    include "koneksiuas.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav>
        <div class="wrapper">
            <div class="logo"><a href="#">Surya<span>Corp</span></a></div>
                <ul>
                    <li style="padding-right: 42px;"><a href="#">Home</a></li>
                    <li style="padding-right: 42px;"><a href="#news">News</a></li>
                    <li style="padding-right: 42px;"><a href="#history">History</a></li>
                    <li style="padding-right: 378px;"><a href="space.php">Space</a></li>
                </ul>
                <ul>
                    <li class="btn"><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

     <!-- Content -->
     <div class="content">
        <div class="welcome">
            <div class="welcomeText">
                <h2>WELCOME TO</h2>
                <h1>Resident<span>Evil</span>
                    <p>
                        <?php
                        if (isset($_SESSION['username'])) {
                            echo $_SESSION['username'];
                        }
                        ?>
                    </p>
                </h1>
            </div>
        </div>

        <!-- news -->
        <div class="title" id="news">News</div>
        <div class="news">
            <img src="img/re.jpg" id="news1">
        </div>

        <!-- history -->
        <!-- <div><a href="#" class="title">characters</a>
            <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem delectus, eius deleniti minus neque quo repudiandae nesciunt incidunt officia magni provident, illo modi corrupti aliquam, quis laboriosam reiciendis beatae. Quod.</h3>
        </div> -->

        <!-- space -->
        <!-- <div><a href="#" class="title">lineup</a>
            <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem delectus, eius deleniti minus neque quo repudiandae nesciunt incidunt officia magni provident, illo modi corrupti aliquam, quis laboriosam reiciendis beatae. Quod.</h3>
        </div> -->
    </div>
</body>
</html>