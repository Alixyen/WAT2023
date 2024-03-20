<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


    <h1>Processing Input from HTML Forms</h1>

    <h2>Login Form using GET</h2>

    <form method="POST" action="../mysql/insertRecord.php">

        <fieldset>

            <legend>

                Login

            </legend>

            <label for="email">Email: </label>

            <input type="text" name="Email"/><br/>

            <label for="passwd">Password: </label>

            <input type="password" name="Pass"/><br/>

            <input type="submit" value="Submit" name="loginSubmit"/>

            <input type="reset" value="Clear"/>

        </fieldset>

    </form>

<?php
if (isset($_GET['loginSubmit'])) {
    // Check if the form is submitted via GET method

    // Retrieve and display the submitted data
    $email = isset($_GET['txtEmail']) ? $_GET['txtEmail'] : '';
    $password = isset($_GET['txtPass']) ? $_GET['txtPass'] : '';

    // Display the data
    echo "<p>Email: $email Password: $password</p>";
}
?>


    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        <fieldset>

            <legend>Comments</legend>

            <label for="email">Email: </label>

            <input type="text" name="email" value=""/><br/>

            <text rows="4" cols="50" name="comments"></text><br/>

            <label for="confirm">Click to Confirm: </label>

            <input type="checkbox" name="confirm" value="agree"><br/>

            <input type="submit" value="Submit" name="submit"/>

            <input type="reset" value="Clear"/>

        </fieldset>

    </form>


<?php
if (isset($_POST['submit'])) {
    // Check if the form is submitted via POST method

    // Check if the email field is not empty
    if (!empty($_POST['email'])) {

        // Retrieve and display the submitted data
        $email = $_POST['email'];
        $comments = isset($_POST['comments']) ? $_POST['comments'] : '';

        // Check the checkbox status
        $confirm = isset($_POST['chkConfirm']) ? 'Agreed<br />' : 'Not Agreed<br />';

        // Display the collected data
        echo "<p>Email: $email</p>";
        echo "<p>Comments: $comments</p>";
        echo "<p>Confirmation: $confirm";
    } else {
        echo 'Email must not be empty';
    }
}
?>

<!-- Second Form -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <fieldset>
        <legend>Price Calculation</legend>
        <label for="afterTax">After Tax Price: </label>
        <input type="text" name="afterTax" value="<?php if(isset($_POST['afterTax'])){ echo htmlspecialchars($_POST['afterTax']); } ?>" /><br />
        <label for="taxRate">Tax Rate (%): </label>
        <input type="text" name="taxRate" value="<?php if(isset($_POST['taxRate'])){ echo htmlspecialchars($_POST['taxRate']); } ?>" /><br />
        <input type="submit" value="Calculate" name="calculate"/>
    </fieldset>
</form>

<?php
if (isset($_POST['calculate'])) {
    // Check if the calculation form is submitted

    // Validate and calculate
    $afterTax = isset($_POST['afterTax']) ? $_POST['afterTax'] : '';
    $taxRate = isset($_POST['taxRate']) ? $_POST['taxRate'] : '';

    // Validate the entered values
    if (!empty($afterTax) && !empty($taxRate) && is_numeric($afterTax) && is_numeric($taxRate)) {
        // Perform the calculation
        $beforeTax = ($afterTax * 100) / (100 + $taxRate);
        echo "<p>Before Tax Price: $beforeTax</p>";
    } else {
        // Display appropriate error messages
        echo 'All Fields Required';
        if (!empty($afterTax) && !is_numeric($afterTax)) {
            echo '<br />Invalid Price entered. Please enter the price in the format 9.99';
        }
        if (!empty($taxRate) && !is_numeric($taxRate)) {
            echo '<br />Invalid Rate entered. Please enter a whole number for tax rate';
        }
    }
}
?>


<h1>Passing Data Appended to a URL</h1>

<h2>Pick a category</h2>

<a href="forms.php">Films</a>

<a href=" forms.php">Books</a>

<a href=" forms.php">Music</a>

