<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.cdnfonts.com/css/resident-evil" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <div class="form-box login">
            <h2>Login</h2>
            <?php
            if(isset($_GET['pesan'])){
                if($_GET['pesan']=='gagal'){
                    echo '<p style="color: gray;">Username/password/email tidak sesuai</p>';
                }
            }
            ?>
                <form action="cekloginuas.php" method="POST">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                    <td><input type= "text" name="username"></td>
                    <label>username</label></div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <td><input type= "email" name="email"></td>
                    <label>email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <td><input type= "password" name="password"></td>
                    <label>password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember Me</label>
                </div>
                <?php
                if(isset($_GET['pesan'])){
                    if($_GET['pesan']=='gagal'){
                        echo '<p style="color: gray;">Anda dapat melakukan sign up jika anda belum terdaftar</p>';
                    }
                }
                ?>
                <button type="submit" class="btn" value="login">login
                </button>
                <div class="login-register">
                    <p>Don't have an account?<a 
                        href="register.php" class="register-link">Sign up</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>