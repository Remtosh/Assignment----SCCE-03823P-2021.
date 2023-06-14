<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $username = $_POST['username'];
    $id = $_POST['ID'];
    $typeofproperty = $_POST['Type'];
    $county = $_POST['county'];
    $propertyrating = $_POST['property_rating'];
    $briefdescription = $_POST['Brief_description'];

    // Validate and sanitize the form data as needed

    // Database connection parameters
    $servername = "localhost";
    $dbusername = "root";
    $password = "";
    $dbname = "login2";

    $mysqli = new mysqli($servername, $dbusername, $password, $dbname);

    // Check the connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Prepare the SQL statement
    $sql = "INSERT INTO sign_up (user_Name, ID, type_of_property, county, property_rating, brief_description) VALUES (?, ?, ?, ?, ?, ?)";

    // Prepare the statement
    $stmt = $mysqli->prepare($sql);

    // Check if the statement was prepared successfully
    if ($stmt === false) {
        die("Error: " . $mysqli->error);
    }

    // Bind parameters using the correct data types
    $stmt->bind_param("ssssss", $username, $id, $typeofproperty, $county, $propertyrating, $briefdescription);

    // Execute the statement
    if ($stmt->execute()) {
        // Data inserted successfully
        $response = "Data inserted successfully.";
    } else {
        // Error in execution
        $response = "Error: " . $stmt->error;
    }

    // Close the statement and the connection
    $stmt->close();
    $mysqli->close();

    // Output the response
    echo $response;
}
?>

