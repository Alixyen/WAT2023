<?php
?>

<form method="POST" action="insertRecord.php">

    <fieldset>

        <legend>

            Enter Customer Details

        </legend>

        <label for="first-name">First Name: </label>

        <input type="text" name="FirstName"/><br/>

        <label for="surname">Surname: </label>

        <input type="text" name="LastName"/><br/>

        <label for="email">Email: </label>

        <input type="text" name="Email"/><br/>

        <label for="password">Password: </label>

        <input type="text" name="Password"/><br/>

        <label for="gender">Gender:</label>

        <select name="Gender" id="Gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select> <br>

        <label for="Age">Age: </label>

        <input type="text" name="Age" id="Age"/><br/>

        <input type="submit">
    </fieldset>

</form>