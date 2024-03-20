<?php


//Make connection to database

include '../databaseConnection.php';

//(a)Gather from $_POST[]all the data submitted and store in variables

//(b)Construct INSERT query using variables holding data gathered

//Temporarily echo $query for debugging purposes

//run $query

// Assuming you have a form with an input field named 'email'
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = isset($_POST['FirstName']) ? htmlspecialchars($_POST['FirstName']) : '';
    $lastname = isset($_POST['LastName']) ? htmlspecialchars($_POST['LastName']) : '';
    $email = isset($_POST['Email']) ? htmlspecialchars($_POST['Email']) : '';
    $password = isset($_POST['Password']) ? htmlspecialchars($_POST['Password']) : '';
    $gender = isset($_POST['Gender']) ? htmlspecialchars($_POST['Gender']) : '';
    $age = isset($_POST['Age']) ? htmlspecialchars($_POST['Age']) : '';

    // Insert data into a hypothetical 'users' table
    $query = "INSERT INTO Customer (FirstName, LastName, Email, Password, Gender, Age) VALUES ('$firstname', '$lastname', '$email', '$password', '$gender', '$age')";

    if (mysqli_query($conn, $query)) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close the connection
    echo $query;
    //header('Location: mysql.php');
    mysqli_close($conn);
}
?>