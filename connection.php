<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "charity";
$conn = mysqli_connect($server, $username, $password, $dbname);

if ($conn) {
?>
    <script>
        console.log("Connection Successfull")
    </script>
<?php
} else {
    die("Database is not connected" . mysqli_connect_error());
}
?>