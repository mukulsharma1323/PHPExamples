<?php

// configure the database 
$connection = mysqli_connect('localhost','root','');
if(!$connection)
{
  exit("database connection failed" .mysqli_error($connection));

}

// connect the database
$select_db=mysqli_select_db($connection,'PHPExamples');
if(!$select_db)
{
  die("database selection failed" .mysqli_error($connection));
}
// receive values from HTML FORM as POST method 
if(isset($_POST['email']) && isset($_POST['password']))
{
  $Email=$_POST['email'];
  $Pass=$_POST['password'];


// echo values to test the variables, if they have value or not.

// echo "$Email";
// echo "$Pass";

// Checking the values are existing in the database or not
$query = "SELECT * FROM `register` WHERE Email='$Email' and password='$Pass'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
//If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
  echo "successfully login";
}else{
//If the login credentials doesn't match, he will be shown with an error message.
echo "Invalid Login Credentials.";
}
}
?>