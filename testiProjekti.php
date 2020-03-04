<!DOCTYPE html>
<html lang="fi">
<head>
<meta cahrset="UTF-8">
<title> Lomakkeen tulostus </title>
<script src="https://kit.fontawesome.com/043b774df2.js" crossorigin="anonymous"></script>
</head>
<body> 

<?php

$yhteys=mysqli_connect("127.0.0.1", "trtkp19a3", "trtkp19a3");
$ok=mysqli_select_db($yhteys, "trtkp19a3");

$tulos=mysqli_query($yhteys, "select * from ryhma9_arvioinnit where pisteet>=3 limit 3");

print "<table border='3' style= 'width:800px;'>";
print "<tr style='background-color:coral; text-align: center; border-spacing: 10px;'><th style='width:80px;'>Reviewer</th><th style='width:100px;><i class='far fa-star'></i><i class='far fa-star'></i><i class='far fa-star'></i><i class='far fa-star'></i><i class='far fa-star'></i></th><th style='width:500px;'>Review</th><th style='width:120px;'>Rating</th></tr>";

while ($rivi=mysqli_fetch_object($tulos))
{
print "<tr style='text-align: center;'><td> $rivi->etunimi </td><td> $rivi->sukunimi </td><td> $rivi->arviointi </td><td>";
if($rivi->pisteet==1)
{
print "<i class='fas fa-star'style='color:coral;'></i>";
print " <i class='far fa-star'></i> ";
print "<i class='far fa-star'></i> ";
print "<i class='far fa-star'></i> ";
print "<i class='far fa-star'></i> ";

print "</td></tr>";
}

if($rivi->pisteet==2)
{
print "<i class='fas fa-star'style='color:coral;'></i>";
print "<i class='fas fa-star'style='color:coral;'></i>";
print "<i class='far fa-star'></i> ";
print "<i class='far fa-star'></i> ";
print "<i class='far fa-star'></i> ";

print "</td></tr>";
}

if($rivi->pisteet==3)
{
print "<i class='fas fa-star'style='color:coral;'></i>";
print "<i class='fas fa-star'style='color:coral;'></i>";
print "<i class='fas fa-star'style='color:coral;'></i>";
print "<i class='far fa-star'></i> ";
print "<i class='far fa-star'></i> ";

print "</td></tr>";
}

if($rivi->pisteet==4)
{
print "<i class='fas fa-star'style='color:coral;'></i>";
print "<i class='fas fa-star'style='color:coral;'></i>";
print "<i class='fas fa-star'style='color:coral;'></i>";
print "<i class='fas fa-star'style='color:coral;'></i>";
print "<i class='far fa-star'></i> ";

print "</td></tr>";
}

if($rivi->pisteet==5)
{
print "<i class='fas fa-star'style='color:coral;'></i>";
print "<i class='fas fa-star'style='color:coral;'></i>";
print "<i class='fas fa-star'style='color:coral;'></i>";
print "<i class='fas fa-star'style='color:coral;'></i>";
print "<i class='fas fa-star' style='color:coral;'></i>";
print "</td></tr>";
}

if($rivi->pisteet<1 || $rivi->pisteet>5)
{

print " <i class='far fa-star'></i> ";
print " <i class='far fa-star'></i> ";
print "<i class='far fa-star'></i> ";
print "<i class='far fa-star'></i> ";
print "<i class='far fa-star'></i> ";

print "</td></tr>";
}


}

mysqli_stmt_close($stmt);


mysqli_close($yhteys);

?>


</body>
</html>

