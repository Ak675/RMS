<?php
include "rmsconnection.php";


$a1=$_GET['username'];
$a2=$_GET['password'];


$sql = "SELECT name,password from userdata where password='$a2' or name ='$a1' ";


#$sql= "SELECT password from form where name = '$a1'  ";

$res = mysqli_query($conn, $sql);




if(!$res)
{
die ('cannot select'.mysqli_error($conn));
}

/*
else
{
echo "<br>Success in extracting info<br><br>";
}

*/

$c=0;


while($row=mysqli_fetch_array($res))
{


if($row['name']==$a1 and $row['password']==$a2)
{
    
    include "choice.php";

          $c++;
}


}

if ($c==0)
    echo "wrong name or password check again";





?>