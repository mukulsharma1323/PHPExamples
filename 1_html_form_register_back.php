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
if(isset($_POST['firstname']) && isset($_POST['lastname']))
{
  $FirstName=$_POST['firstname'];
  $LastName=$_POST['lastname'];
  $Email=$_POST['email'];
  $User=$_POST['username'];
  $Pass=$_POST['password'];


// echo values to test the variables, if they have value or not.

// echo "$FirstName";
// echo "$LastName";
// echo "$Email";
// echo "$User";
// echo "$Pass";

// insert values into database
 $query="INSERT INTO register (First_Name,Last_Name,Email,Username,Password)Values('$FirstName','$LastName','$Email','$User','$Pass')";
  $result = mysqli_query($connection, $query);
  if($result)
  {
    echo "User created successfully";
  }
  else
  {
  	echo "user Registration failed";
  }
}
?>