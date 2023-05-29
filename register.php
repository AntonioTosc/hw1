<?php
session_start();
require'conndb.php';

if($_SERVER['REQUEST_METHOD']== 'POST') {

    if (isset($_POST['registrati'])) {
        if(isset($_POST["username"])){
            $username=$_POST["username"];
            echo"set|".$username."|";

        }
else{
    echo"|".$username."|";
    $username="";

}
if(isset($_POST["nome"])){
    $nome=$_POST["nome"];

}
else{
    $nome="";
}
if(isset($_POST["cognome"])){

    $cognome=$_POST["cognome"];
}
else{

    $cognome="";
}
if(isset($_POST["email"])){
$email=$_POST["email"];

}
else{
    $email="";
}
if(isset($_POST["password"])){
    $password=$_POST["password"];
}
else{
    $password="";
}
$userMd5=md5($password);

$stmt=$conn->prepare("INSERT INTO pokemon.utenti(nome,cognome,email,password,username) VALUES(?,?,?,?,?)");
$stmt->bind_param("sssss",$nome,$cognome,$email,$passMd5,$username);//s sta per stringhe i per integer
$stmt->execute();
$result=$stmt->get_result();
$conn->close();


//inserimento completato con successo!

$_SESSION['username']=$username;
header("Location: hw1.php");
die();

    }else{

        echo"errore";
    }



}



?>














<h1> registrazione</h1>

<form action="./register.php" method="POST">
    <div id='name' class='inputBox'>
        <label class="inputLabel"> Nome</label>
        <input type="text" id="nameID" name="nome" onkeyup="textValidate(this)">
        <span id="nameID_check"></span>
    </div>

    <div id="surname" class="inputBox">
        <label class="inputLabel">Cognome</label>
        <input type="text" id="surnameID" name="cognome"  onkeyup="textValidate(this)">
        <span id="surnameID_check"></span>
    </div>

    <div id="password" class="inputBox">
        <label class="inputLabel">Password</label>
        <input type="password" id="passwordID" name="password"  onkeyup="textValidate(this)">
        <span id="passwordID_check"></span>
    </div>
    <br>

    <input id="registratiBTN" type="submit" name="registrati" value="registrati"></input>
</form>