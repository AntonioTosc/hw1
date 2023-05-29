<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pages</title>
    <link rel="stylesheet" href="hw1.css">
</head>
<body>
    
  
    

      <div class="logo">
        <img src="logo.jpg" alt="Logo" width="100" height="100">
      </div>

    
    <header>
        
        <nav class="navigation">
            <a href="hw1.php">Home</a>
            <a href="pokedex.php">Pokédex</a>
            <a href="pokemon.php">Tipi Pokemon</a>
            <a href="contact.php">Contact</a>
            
            <button class="btnLogin-popup">Login</button>
        </nav>
     
    </header>

    <div class="wrapper">

        <spam class="icon-close"><ion-icon name="close-circle"></ion-icon></spam>

<?php
    session_start();
    if(isset($_SESSION["username"])){
$username=$_SESSION["username"];

        echo"<h1> ciao".$username ."<h1>";
        
?>
<p>
    <a href="logout.php"> Logout</a>
</p>
<?php
    }else{

        
    }




?>

        <div class="from-box login">
            <h2>Login</h2>
            <form action="/login.php" method="POST">

                <div class="input-box">
                    <spam class="icon"><ion-icon name="mail"></ion-icon></spam>
                    <input type="email" required>
                    <label>Email</label>
                </div>

                <div class="input-box">
                    <spam class="icon"><ion-icon name="lock-closed"></ion-icon></spam>
                    <input type="password" required>
                    <label>Password</label>
                </div>

                <div class="remember-forgot">
                    <label><input type="checkbox"> Remember me</label>
                    <a href="#">Forgot Password</a>
                </div>

                <button type="submit" class="btn">Login</button>

                <div class="login-register">
                    <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
                </div>

            </form>
        </div>

        <div class="from-box register">
            <h2>Registration</h2>
            <form action="#" method="POST">

                <div class="input-box">
                    <spam class="icon"><ion-icon name="person"></ion-icon></spam>
                    <input type="text" required>
                    <label>Username</label>
                </div>

                <div class="input-box">
                    <spam class="icon"><ion-icon name="mail"></ion-icon></spam>
                    <input type="email" required>
                    <label>Email</label>
                </div>

                <div class="input-box">
                    <spam class="icon"><ion-icon name="lock-closed"></ion-icon></spam>
                    <input type="password" required>
                    <label>Password</label>
                </div>

                <div class="remember-forgot">
                    <label><input type="checkbox"> I agree to the terms & conditions</label>
                </div>

                <button type="submit" class="btn">Register</button>

                <div class="login-register">
                    <p>Already have an account? <a href="#" class="login-link">Login</a></p>
                </div>

            </form>
        </div>
        
    </div>



    <script src="hw1.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

   

</body>
</html>

