<?
// db connection parameters

$dbserver = "localhost";
$dbUser = "root";
$dbpass = "";
$dbName = "nidellarest";

// connect

$conn = mysqli_connect($dbserver,$dbUser,$dbpass,$dbName);
if(!$conn){
    die("Connection Faild: ".mysqli_connect_error());
}

?>