
<?php



$yhteys=mysqli_connect("127.0.0.1", "trtkp19a3", "trtkp19a3");
$ok=mysqli_select_db($yhteys, "trtkp19a3");
$sql="select * from ryhma9_arvioinnit";
$tulos=mysqli_query($yhteys, $sql) or die("Ei yhteyttä");

if(mysqli_num_rows($tulos)>0)
{
while ($rivi=mysqli_fetch_object($tulos))
{
print "<b>Reviewer: </b>";
print "<br>";
print "$rivi->etunimi $rivi->sukunimi ";
print "<br> <br>";
print "<b>Review: </b>";
print "<br> ";
print "$rivi->arviointi";
print "<br> <br>";
print "<b>Scores: </b>";
print "<br>";
print "$rivi->pisteet / 5";
print "<br> <br>";
print "<hr>";
}}
else
{
print"No reviews";
}

mysqli_stmt_close($stmt);
mysqli_close($yhteys);

?>

