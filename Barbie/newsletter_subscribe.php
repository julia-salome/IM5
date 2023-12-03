<?php
$servername = "localhost";
$username = "840072_6_1";
$password = "fDHegOjTsXCx";
$dbname = "840072_6_1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = time();

    $sql = "INSERT INTO `Barbie_Newsletter` (User_ID, email) VALUES ('$name', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Erfolgreich für den Newsletter angemeldet!";
    } else {
        echo "Fehler beim Anmelden für den Newsletter: " . $conn->error;
    }
}

$conn->close();
?>
