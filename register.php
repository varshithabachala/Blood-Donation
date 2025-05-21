<?php
include 'db.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $blood_group = $_POST['bloodGroup'];
    $password= $_POST['password'];
    $address = $_POST['address'];

    // Insert data into the database
    $sql = "INSERT INTO blood_donation_table(name, email, phoneNumber, bloodGroup, password, address)
            VALUES ('$name', '$email', '$phone', '$blood_group','$password', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registration successful!'); window.location.href='home.html';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    

    $conn->close();
}
?>