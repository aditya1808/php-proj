<?php
if($_FILES["uploadfile"]["error"]!=0)
{
echo "error";
}
else
{
if((($_FILES["uploadfile"]["type"]=="image/gif")||($_FILES["uploadfile"]["type"]=="image/png")||($_FILES["uploadfile"]["type"]=="image/jpeg"))&&($_FILES["uploadfile"]["size"]<2000000))
{

if(file_exists("vam/".$_FILES["uploadfile"]["name"]))
{

echo"File already exists";
}
else
{

move_uploaded_file($_FILES["uploadfile"]["tmp_name"],"vam/".$_FILES["uploadfile"]["name"]);
$username="rav/".$_FILES["uploadfile"]["name"];
}

}
}




?>
