<?php
// Verbindung zur Datenbank herstellen
$servername = "localhost"; // z.B. "localhost"
$username = "840072_6_1";
$password = "fDHegOjTsXCx";
$dbname = "840072_6_1";

$conn = new mysqli($servername, $username, $password, $dbname);

// Überprüfen, ob die Verbindung erfolgreich ist
if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

// Daten aus dem Formular erhalten
$name = $_POST['name'];
$email = $_POST['email'];

// SQL-Befehl zum Einfügen der Daten in die Tabelle
$sql = "INSERT INTO Barbie_Newsletter (User_ID, email) VALUES ('$name', '$email')";

// Überprüfen, ob die Daten erfolgreich eingefügt wurden
if ($conn->query($sql) === TRUE) {
    echo "Anmeldung erfolgreich!";
} else {
    echo "Fehler: " . $sql . "<br>" . $conn->error;
}

// Verbindung schließen
$conn->close();
?>
