<?php
$servername = "localhost";
$username = "logger";
$password = "herpderp";
$dbname = "log_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT time, temp FROM log";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
	echo "Date: ". date("Y-m-d-H:i:s", $row["time"]) ." Temp: ". $row["temp"] ."<br>";
    }

}

mysqli_close($conn);
        ?>



