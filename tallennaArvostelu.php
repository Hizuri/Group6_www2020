<?php

$etunimi=$_POST["fname"];
$sukunimi=$_POST["lname"];
$arviointi=$_POST["review"];
$pisteet=$_POST["rating"];

$yhteys=mysqli_connect("127.0.0.1", "trtkp19a3", "trtkp19a3");
$ok=mysqli_select_db($yhteys, "trtkp19a3");

$sql="insert into ryhma9_arvioinnit(etunimi, sukunimi, arviointi, pisteet) values(?, ?, ?, ?)";
$stmt=mysqli_prepare($yhteys, $sql);
mysqli_stmt_bind_param($stmt, 'sssi', $etunimi, $sukunimi, $arviointi, $pisteet);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
mysqli_close($yhteys);
exit;

?>