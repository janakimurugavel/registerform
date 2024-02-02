<?php
include 'db_connection.php';
    // Retrieve form data
    $username = $_POST['username'];
    $lastname = $_POST['lastname'];
   // $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $dob = $_POST['dob'];
    $phoneNumber = $_POST['phoneNumber'];
    $zip = $_POST['zip'];

    // Perform any additional server-side validation or processing here

    // Insert data into the database
    $sql = "INSERT INTO user (username, lastname, email, address, city, state, dob, phoneNumber, zip) VALUES ('$username', '$lastname', '$email', '$address', '$city', '$state', '$dob', '$phoneNumber', '$zip')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>
<?php
/*include 'db_connection.php';

// Retrieve form data
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
$email = mysqli_real_escape_string($conn, $_POST['email']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$district = mysqli_real_escape_string($conn, $_POST['district']);
$state = mysqli_real_escape_string($conn, $_POST['state']);
$dob = $_POST['dob'];
$phoneNumber = $_POST['phoneNumber'];
$zip = $_POST['zip'];

// Perform any additional server-side validation or processing here

// Use prepared statement to prevent SQL injection and handle special characters
$stmt = $conn->prepare("INSERT INTO user (username, password, email, address, district, state, dob, phoneNumber, zip) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

// Bind parameters
$stmt->bind_param("ssssssssi", $username, $password, $email, $address, $district, $state, $dob, $phoneNumber, $zip);

// Execute the statement
if ($stmt->execute()) {
    echo "Registration successful!";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();*/
?>
