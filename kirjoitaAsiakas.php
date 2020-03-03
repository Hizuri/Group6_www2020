<?php
include ("header.html");
?>

<?php
$yhteys=mysqli_connect("127.0.0.1", "trtkp19a3", "trtkp19a3");
$ok=mysqli_select_db($yhteys, "trtkp19a3");


 $tulos=mysqli_query($yhteys, "select * from miikka_asiakkaat");

echo "<body style='background-color:orange'>";

 
  while ($rivi=mysqli_fetch_object($tulos)){
 	print "<h3>Asiakastunnus = $rivi->id</h3><br> Etunimi = $rivi->firstname Sukunimi=$rivi->lastname Paikkakunta=$rivi->city Postinumero=$rivi->postalcode Kotiosoite=$rivi->address Spostiosoite=$rivi->email Puhelinnumero=$rivi->phone<br>";
 }
   while ($rivi=mysqli_fetch_object($tulos)){
 	print "First name = $rivi->firstname<br>";
 }


mysqli_stmt_close($stmt);
mysqli_close($yhteys);

?>

<?php
include("footer.html");
?>