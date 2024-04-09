<?php
// Database connection parameters
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$database = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$fullname = $_POST['fullname'];
$contact = $_POST['contact'];
$parent_contact = $_POST['parent_contact'];
$stream = $_POST['stream'];
$college = $_POST['college'];
$course_name = $_POST['course_name'];
$course_completion_year = $_POST['course_completion_year'];
$student_department = $_POST['student_department'];
$profile = $_POST['profile'];
$qualification = $_POST['qualification'];
$graduation_month = $_POST['graduation_month'];

// Prepare SQL statement
$sql = "INSERT INTO your_table_name (fullname, contact, parent_contact, stream, college, course_name, course_completion_year, student_department, profile, qualification, graduation_month) 
        VALUES ('$fullname', '$contact', '$parent_contact', '$stream', '$college', '$course_name', '$course_completion_year', '$student_department', '$profile', '$qualification', '$graduation_month')";

// Execute SQL statement
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
