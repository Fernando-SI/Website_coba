<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="Register.css">
    <link href="https://fonts.cdnfonts.com/css/resident-evil" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>
<div class="wrapper">
        <div class="form-box login">
            <h2>Register</h2>
            
            <form action="addus.php" method="POST">
                <div class="input-box">
                <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                <td><input type= "text" name="username"></td>
                <label>username</label>
            </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <input type="email" name="email">
                    <label>email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="password" name="password">
                    <label>password</label>
                </div>
                <div class="policy">
                    <label><input type="checkbox" required>Agree to the terms & condition</label>
                </div>
                <button type="submit" class="btn">Register
                </button>
                <div class="login-register">
                    <p>Already have an account<a 
                        href="login.php" class="login-link"> Login</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>