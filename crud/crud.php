<?php
include '../databaseConnection.php';
?>

<link rel="stylesheet" href="../style/main.css">

<div class="product-form-container">
    <h2>Manage Products</h2>

        <form method="POST" action="insertProduct.php">

                <p>Enter New Product Details</p>

                <label for="pName">Product Name: </label><br>

                <input type="text" name="pName" id="pName"/><br>

                <label for="pPrice">Price: </label><br>

                <input type="text" name="pPrice" id="pPrice"><br>

                <label for="Filename">Image Filename: </label> <br>

                <input type="text" name="Filename" id="Filename"/><br>

                <input type="submit" value="Submit" name="loginSubmit"/>

                <input type="reset" value="Clear"/>

        </form>
</div>

<?php
include "displayProducts.php";

