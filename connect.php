<?php
$servername = "localhost"; 
$username = "root";        
$password = "";            
$dbname = "jatek";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo "<!DOCTYPE html>
          <html>
          <head>
            <title>Adatbázis Csatlakozás</title>
          </head>
          <body>
            <h1>Csatlakozási hiba!</h1>
            <p>A kapcsolat nem sikerült: " . $conn->connect_error . "</p>
          </body>
          </html>";
    exit(); 
} else {
    echo "<!DOCTYPE html>
          <html>
          <head>
            <title>Adatbázis Csatlakozás</title>
          </head>
          <body>
            <h1>Csatlakozás sikeres!</h1>
            <p>Az adatbázis kapcsolata sikeresen létrejött.</p>
          </body>
          </html>";
}

// Kapcsolat bezárása
$conn->close();
?>
