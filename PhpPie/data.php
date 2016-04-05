<?php



include_once('dbconnection.php');



$sth = $dbh->prepare("SELECT * FROM pie_options");
$sth->execute();
$result = $sth->fetchAll();

print_r($result);





?>