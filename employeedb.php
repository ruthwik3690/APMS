<html>
<?php

$host="localhost";
$username="root";
$password="saibaba";
$db_name="teacher";
$tbl_name="teacher";

$conn= mysqli_connect("$host","$username","$password","$db_name")or die("Cannot connect");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$orderid=$_POST['orderid'];
$from=$_POST['from'];
$phnno=$_POST['phoneno'];
$rackno=$_POST['rack'];
$sqli="INSERT INTO teacher VALUES ('$orderid','$from','$phnno','$rackno')";
$result=mysqli_query($conn,$sqli);

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
	echo "The order id is $orderid";
echo "<br>";
echo "The website is $from";
echo "<br>";
echo "The phone no. is $phnno";
echo "<br>";
echo "The rack no. is $rackno";
echo "<br>";


}
?>

