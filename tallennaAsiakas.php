<?php
include ("header.html");
?>

<?php
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$city=$_POST["city"];
$postalcode=$_POST["postalcode"];
$address=$_POST["address"];
$email=$_POST["email"];
$phone=$_POST["phone"];

$yhteys=mysqli_connect("127.0.0.1", "trtkp19a3", "trtkp19a3");
$ok=mysqli_select_db($yhteys, "trtkp19a3");

$sql="insert into miikka_asiakkaat(firstname, lastname, city, postalcode, address, email, phone) values (?, ?, ?, ?, ?, ?, ?)";
$stmt=mysqli_prepare($yhteys, $sql);
mysqli_stmt_bind_param($stmt, 'sssissi', $firstname, $lastname, $city, $postalcode, $address, $email, $phone);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
mysql_close($yhteys);
?>

<?php
include ("footer.html");
?>
