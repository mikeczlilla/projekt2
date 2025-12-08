<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "2-es csoport";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$email = $_POST["email_b"];
$jelszo = $_POST["jelszo_b"];

$sql = "SELECT email, jelszo FROM tabla WHERE email = '$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $arrayEmail = $row["email"];
        $arrayJelszo = $row["jelszo"];
    }
}

if ($arrayJelszo == $jelszo) {
    $sql = "SELECT username, vezeteknev, keresztnev, szdatum, tszam, iranyitoszam, varos, utca, haz_szam FROM tabla WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $_SESSION["username"] = $row["username"];
        $_SESSION["vezeteknev"] = $row["vezeteknev"];
        $_SESSION["keresztnev"] = $row["keresztnev"];
        $_SESSION["email"] = $arrayEmail;
        $_SESSION["jelszo"] = $arrayJelszo;
        $_SESSION["szdatum"] = $row["szdatum"];
        $_SESSION["tszam"] = $row["tszam"];
        $_SESSION["iranyitoszam"] = $row["iranyitoszam"];
        $_SESSION["varos"] = $row["varos"];
        $_SESSION["utca"] = $row["utca"];
        $_SESSION["haz_szam"] = $row["haz_szam"];
    }
    echo "Sikeres bejelentkezés";
    header('Location: ../profil.php');
    exit;
} else {
    echo "Sikertelen bejelentkezés";
}
