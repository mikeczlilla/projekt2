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

$vnev = $_POST["vnev"];
$knev = $_POST["knev"];
$fnev = $_POST["fnev"];
$email = $_POST["email"];
$jelszo1 = $_POST["jelszo1"];
$tfon = $_POST["tfon"];
$szdatum = $_POST["szdatum"];
$irszam = $_POST["irszam"];
$telepules = $_POST["telepules"];
$utca = $_POST["utca"];
$hszam = $_POST["hszam"];

$sql = "SELECT email FROM tabla";
$result = mysqli_query($conn, $sql);
$arrayEmail = ["a"];

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while ($row = mysqli_fetch_assoc($result)) {
    $arrayEmail[] = $row["email"];
  }
}
print_r($arrayEmail);
if (array_search($email, $arrayEmail)) {
  echo "Már van ilyen email-cím";
} else {
  $sql = "INSERT INTO tabla (username, vezeteknev, keresztnev, email, jelszo, szdatum, tszam, iranyitoszam, varos, utca, haz_szam)
  VALUES ('$fnev', '$vnev', '$knev', '$email', '$jelszo1', '$szdatum', '$tfon', '$irszam', '$telepules', '$utca', '$hszam')";
  if ($conn->query($sql) === TRUE) {
    echo "Sikeres regisztráció";
    header('Location: ../lang/index-en.html');
    exit;
  } else {
    echo "Hiba: " . $sql . "<br>" . $conn->error;
  }
}

mysqli_close($conn);
exit;
