<?php
$txtAddress=$_POST['txtAddress'];
$txtCity=$_POST['txtCity'];
$txtFirstName=$_POST['txtFirstName'];
$txtLastName=$_POST['txtLastName'];
$iPersonId=$_POST['iPersonId'];

echo ('Mensaje desde php: '.$txtAddress.', '.$txtCity.', '.$txtFirstName.', '.$txtLastName.', '.$iPersonId);
/*include('conn.php');
$objIs=new InfoSystem();
$objIs->getConn();
//$objIs->setMessage('mensaje desde bsnsCat a conn');
$resp=$objIs->setCatPersons($txtAddress,$txtCity,$txtFirstName,$txtLastName,$iPersonId);
echo ($resp);
*/




?>
