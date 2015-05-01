<?php
$search=$_POST['search'];


$con=mysql_connect("localhost","root","");
mysql_select_db('bloodbank');

$sql="select * from bldbnk WHERE location='$search'";

$query=mysql_query($sql,$con);

while($row=mysql_fetch_row($query))
{
print_r($row);
}



$sql1="select * from blddon WHERE location='$search'";

$query1=mysql_query($sql1,$con);

while($row1=mysql_fetch_row($query1))
{
print_r($row1);
}
?>

