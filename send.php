<?php

$serer = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con)
{
    die("connection to this database falid due to ". mysqli_connect_error());

}
// echo "success connectin to the db";

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$query = $_POST['query'];

$sql = "INSERT INTO `photogallery`.`quarry` (`FIRST NAME`, `LAST NAME`, `EMAIL`, `CONTACT NUMBER`, `QUERY`, `DATETIME`) VALUES ('$firstname', '$lastname', '$email', '$contact', '$query', current_timestamp());";
// echo $sql;

if ($con->query($sql)== true)
{
    // echo "successfully exicuted";
}
else
{
    echo "error: $sql <br> $con->error";
}
$con->close(); 

?>