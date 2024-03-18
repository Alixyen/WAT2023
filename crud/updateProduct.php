<?php

include 'connection.php';

if (isset($_POST['productID'], $_POST['pName'], $_POST['pPrice'], $_POST['Filename'])) {
    $productID = $_POST['productID'];
    $productName = mysqli_real_escape_string($conn, $_POST['pName']); // Minimally sanitize inputs to prevent some SQL injection
    $productPrice = mysqli_real_escape_string($conn, $_POST['pPrice']);
    $productFilename = mysqli_real_escape_string($conn, $_POST['Filename']);

    $sql = "UPDATE products SET ProductName = '$productName', ProductPrice = '$productPrice', ProductImageName = '$productFilename' WHERE ProductID = $productID";

    if (mysqli_query($conn, $sql)) {
        echo "Product updated successfully.";
    } else {
        echo "Error updating product: " . mysqli_error($conn);
    }
} else {
    echo "All fields are required.";
}

mysqli_close($conn);
