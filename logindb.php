<html>
<?php

$host="localhost";
$username="root";
$password="saibaba";
$db_name="ruthwik";
$tbl_name="loginform";

$conn= mysqli_connect("$host","$username","$password","$db_name")or die("Cannot connect");

$myemail=$_POST['email'];
$mypassword=$_POST['password'];
$sqli="select * from $tbl_name where password='$mypassword' AND Email='$myemail'";
$result=mysqli_query($conn,$sqli);
$count=mysqli_num_rows($result);
$value="Login succesful!!";


if($count==1)
{
echo "<h1>Login Successful!</h1>";
echo "<br>";
echo "<br>";
echo "<br>";


}

else
{

echo "<h1>Authentication failed!</h1>";

}
?>
<h3>If you are successfully logged in then you can continue ...</h3>
<a href="options.html">Click here ..</a>




<h3>If you are not logged in then try once again..</h3>
<a href="index.html">Click here..</a>
</html>
