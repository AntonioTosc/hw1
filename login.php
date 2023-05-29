<?php
session_start();
require 'conndb.php';

if(isset($_POST["username"])){
    $username=$_POST["username"];
}
else{
    
    $username="";
    echo"<br> credenziali non valide <br>";
    echo "<a href =\"hw1.php\">Home </a>";
    exit(1);

}

if(isset($_POST["pass"])){

    $password=$_POST["pass"];
    $userMd5Pass=md5($password);

    $stm2=$conn->prepare("SELECT username, password FROM pokémon.utenti where username=? and password=?");
    $stmt2->bind_param("ss",$username,$userMd5Pass);
    $stmt2->execute();
    $result2=$stmt2->get_result();

    if($result2->num_rows > 0) {
        if($row=$result2->fetch_assoc()) {

            $_SESSION['username']=$row["username"];
            header("Location: hw1.php");
            die();

        }

    }else{
        echo"<br> credenziali non valide <br>";
        echo "<a href= \"hw1.php\">HOME </a>";
    }

}

?>