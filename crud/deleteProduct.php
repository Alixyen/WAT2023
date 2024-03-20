<?php
include "../databaseConnection.php"; // includes my database connection

// checks if the product id is set
if (isset($_GET['id'])) {
    $id = $_GET['id']; // Directly take the ID from the GET parameter

    // query to delete the product by its ID
    $sql = "DELETE FROM products WHERE ProductID = $id";

    // executes the query
    if (mysqli_query($conn, $sql)) {
        // redirect back if query success
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit;
    } else {
        // print an error if there was an issue with the deletion
        echo "Error deleting record: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    // if no id was found echo an error
    echo "Error: No ID provided.";
}
?>

