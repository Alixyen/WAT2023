<?php
include 'connection.php';

// Assuming you're passing the product's ID as a query parameter
if (isset($_GET['id'])) {
    $ProductID = $_GET['id'];
    // You might want to fetch the current product details to populate the form
    // This step is optional if you're not showing current values in the form
} else {
    echo "No product ID provided.";
    exit;
}
?>

<link rel="stylesheet" href="../style/main.css">

<div class="product-form-container">
    <h2>Update Product</h2>
    <form method="POST" action="updateProduct.php">
        <input type="hidden" name="productID" value="<?php echo htmlspecialchars($ProductID); ?>"/>

        <label for="pName">Product Name: </label><br>
        <input type="text" name="pName" id="pName"/><br>

        <label for="pPrice">Price: </label><br>
        <input type="text" name="pPrice" id="pPrice"><br>

        <label for="Filename">Image Filename: </label> <br>
        <input type="text" name="Filename" id="Filename"/><br>

        <input type="submit" value="Update Product"/>
        <input type="reset" value="Clear"/>
    </form>
</div>