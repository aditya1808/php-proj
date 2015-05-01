<?php
$username=$_POST['username'];
$password=$_POST['password'];

$con=mysql_connect("localhost","root","");
mysql_select_db('bloodbank');

$sql="SELECT * FROM bldbnk WHERE username='$username'";

$query=mysql_query($sql,$con);

while($row=mysql_fetch_array($query))
{
if($row[2]==$password)
{
header('Location:userpage.html');
}
else
{
echo "Password Wrong";
}

}



?>