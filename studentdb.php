<html>
<?php

$host="localhost";
$username="root";
$password="saibaba";
$db_name="student";
$tbl_name="student";

$conn= mysqli_connect("$host","$username","$password","$db_name")or die("Cannot connect");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$orderid=$_POST['orderid'];
$from=$_POST['from'];
$rollno=$_POST['rollno'];
$phnno=$_POST['phoneno'];
$rackno=$_POST['rack'];
$sqli="INSERT INTO student VALUES ('$orderid','$from','$rollno','$phnno','$rackno')";
$result=mysqli_query($conn,$sqli);
echo "The order id is $orderid";
echo "<br>";
echo "The website is $from";
echo "<br>";
echo "The roll no. is $rollno";
echo "<br>";
echo "The phone no. is $phnno";
echo "<br>";
echo "The rack no. is $rackno";
echo "<br>";
$count=mysqli_num_rows($result);
$value="Succesful!!";
if($count==1)
{
echo "<h1>Successful!</h1>";
echo "<br>";
echo "<br>";
echo "<br>";





}

else
{

echo "<h1>Succesful!!!!</h1>";


}
?>

