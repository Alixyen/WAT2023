<link rel="stylesheet" href="../crud">

<h2>Manage Products</h2>
<table border='1'>
    <tr>
        <th>Product Name</th>
        <th>Price</th>
        <th>Image</th>
        <th>Amend</th>
        <th>Delete</th>
    </tr>

    <?php
    include "connection.php"; // Make connection to database

    // Create a query to select all records from products table
    $sql = "SELECT * FROM products";
    $result = mysqli_query($connection, $sql); // Run query and store the result in $result

    // Check if there are any results
    if (mysqli_num_rows($result) > 0) {
        // Use a while loop to iterate through the $result array and display each product
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>" . htmlspecialchars($row["ProductName"]) . "</td>
                <td>" . htmlspecialchars($row["ProductPrice"]) . "</td>
                <td><img src='images/" . htmlspecialchars($row["ProductImageName"]) . "' alt='Product Image' height='100'></td>
                <td><a href='amendProduct.php?id=" . $row["ProductID"] . "'>Amend</a></td>
                 <td><a href='deleteProduct.php?id=" . $row["ProductID"] . "'>Delete</a></td>
              </tr>";
        }
    } else {
        echo "<tr><td colspan='5'>0 results</td></tr>";
    }
    echo "</table>";

    // Close connection
    mysqli_close($connection);
    ?>