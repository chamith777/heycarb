<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);


$servername="localhost";
$username="root";
$password="";
$dbname="haycarb";

//create connection
$conn=new mysqli($servername,$username,$password,$dbname);


// check connection
if($conn->connect_error)
{
    die("Connection failed:".$conn->connect_error);

}

echo"connected successfully";

//getting user input form the html forms

$name = $_POST['name'];
$email = $_POST['email'];
$company = $_POST['company'];
$password = $_POST['password'];
$message = $_POST['message'];

//insert data to the table
$sql = "INSERT INTO students(name,email,company,password,message)VALUES('$name','$email','$company','$password','$message')";

//insert datat into the students successfully
if($conn->query($sql)===TRUE)
    {
      echo"Record saved successfully!";
    }
else
    {
      echo"Error:".$conn->error;
    }
 $conn->close();

?>