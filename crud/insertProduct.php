<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productName = isset($_POST['ProductName']) ? htmlspecialchars($_POST['ProductName']) : '';
    $productPrice = isset($_POST['ProductPrice']) ? htmlspecialchars($_POST['ProductPrice']) : '';
    $productImageName = isset($_POST['ProductImageName']) ? htmlspecialchars($_POST['ProductImageName']) : '';

    // Insert data into a hypothetical 'users' table
    $query = "INSERT INTO products (ProductName, ProductPrice, ProductImageName) VALUES ('$productName', '$productPrice', '$productImageName')";

    if (mysqli_query($conn, $query)) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close the connection
    echo $query;
    mysqli_close($conn);
}

