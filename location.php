<!DOCTYPE html>
<html>
<?php 
include "rmsconnection.php";

$a1=$_GET['facultyname'];
$a2=$_GET['day'];
$a3=$_GET['time'];

echo "<center>";
echo "<br><br>";
echo "<table>";
echo "<tr>";
echo "<th>The current location of Prof. $a1 is: </th>";
echo "</tr>";

$sql= "SELECT `$a3` FROM `$a2` WHERE name = '$a1'";
$res=mysqli_query($conn,$sql);
if(!$res)
{
die ('cannot select'.mysqli_error($conn));
}

while($row=mysqli_fetch_array($res))
{
echo "<tr>";
echo "<td>";
echo $row["$a3"];
echo "</td>";
echo "</tr>";
}

echo "<table>";
echo "<tr>";
echo "<th> name </th>";
echo "<th> 9-10am </th>";
echo "<th> 10-11am </th>";
echo "<th> 11-12am </th>";
echo "</tr>";

$sql1= "SELECT * FROM `$a2` WHERE name = '$a1' ";
$res1=mysqli_query($conn,$sql1);
if(!$res1)
{
die ('cannot select'.mysqli_error($conn));
}
echo "<br><br>";
echo "Prof. $a1's $a2 complete schedule is :";

while($row1=mysqli_fetch_array($res1))
{
echo "<tr>";
echo "<td>";
echo $row1['name'];
echo "</td>";
echo "<td>";
echo $row1['1'];
echo "</td>";
echo "<td>";
echo $row1['2'];
echo "</td>";
echo "<td>";
echo $row1['3'];
echo "</td>";
echo "</tr>";
}

echo "</table>";
echo "</center>";

mysqli_close($conn)
 ?>
<head>
	<title>Location</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script type="text/javascript"></script>
	<title>Resource Management System</title>
         <style type="text/css">
         body{
         	padding-top: 55px;
         }
         table, th, td {
    border: 1px solid black;
}
             footer {
                 position: absolute;
                 width:100%;
                 height:10%;
                 bottom: 0;
                     }
             footer {
                 background: #1e1d26;
                     }
         </style>
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #ed8244;">
     <a class="navbar-brand" href="Faculty locator.php">Faculty Locator</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav mr-auto">
         <li class="nav-item active">
           <a class="nav-link" href="Faculty locator.php">Home <span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="about.html">About Us</a>
         </li>
       </ul>
     </div>
   </nav>
<footer><center style="color:white";>Thank You for visiting</center></footer>
</body>
</html>











