<?php
?>

<link rel="stylesheet" href="../style/main.css">

<div class="product-form-container">
    <h2>Manage Products</h2>

        <form method="POST" action="../insertRecord.php">

                <p>Enter New Product Details</p>

                <label for="pName">Product Name: </label><br>

                <input type="text" name="pName" id="pName"/><br>

                <label for="price">Price: </label><br>

                <input type="text" name="price" id="price"><br>

                <label for="filename">Image Filename: </label> <br>

                <input type="text" name="filename" id="filename"/><br>

                <input type="submit" value="Submit" name="loginSubmit"/>

                <input type="reset" value="Clear"/>

        </form>
</div>