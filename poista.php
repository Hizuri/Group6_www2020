
<?php
$id=$_POST["id"];

$yhteys = mysqli_connect("127.0.0.1", "trtkp19a3", "trtkp19a3");
$ok = mysqli_select_db($yhteys, "trtkp19a3");
$sql="delete from ryhma9_arvioinnit where id=$id";
$stmt = mysqli_prepare($yhteys, $sql);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
mysqli_stmt_close($yhteys);

header("Location: poistaArvostelu.html");

?>
