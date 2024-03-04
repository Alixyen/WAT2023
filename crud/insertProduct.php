<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productName = isset($_POST['pName']) ? htmlspecialchars($_POST['pName']) : '';
    $productPrice = isset($_POST['pPrice']) ? htmlspecialchars($_POST['pPrice']) : '';
    $productImageName = isset($_POST['Filename']) ? htmlspecialchars($_POST['Filename']) : '';

    //
    $stmt = mysqli_prepare($connection, "INSERT INTO products (ProductName, ProductPrice, ProductImageName) VALUES (?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "sds", $productName, $productPrice, $productImageName);;

    if (mysqli_stmt_execute($stmt)) {
        echo "Records inserted";
    } else {
        echo "Error: " . mysqli_error($connection);
    }
    // Close the connection
    mysqli_stmt_close($stmt);
    mysqli_close($connection);
}

