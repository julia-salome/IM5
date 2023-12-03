<?php
$servername = "localhost"; 
$username = "840072_6_1";
$password = "fDHegOjTsXCx";
$dbname = "840072_6_1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}


$name = $_POST['name'];
$email = $_POST['email'];


$sql = "INSERT INTO Barbie_Newsletter (User_ID, email) VALUES ('$name', '$email')";


if ($conn->query($sql) === TRUE) {
    echo "Anmeldung erfolgreich!";
} else {
    echo "Fehler: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
