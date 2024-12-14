<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chessdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $experience = $_POST["experience"];
    $rating = $_POST["rating"];
    $collegeId = $_POST["collegeId"];
    $year = $_POST["year"];
    $reason = $_POST["reason"];

    $sql = "INSERT INTO registrations (name, email, phone, experience, rating, collegeId, year, reason) 
            VALUES ('$name', '$email', '$phone', '$experience', '$rating', '$collegeId', '$year', '$reason')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
