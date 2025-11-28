<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $sql = "INSERT INTO contacts (name, email, phone, message) 
            VALUES ('$name', '$email', '$phone', '$message')";

    if (mysqli_query($conn, $sql)) {
        // echo "success";
        header("Location: ../thankyou.php");
exit();

    } else {
        echo "error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
