<!DOCTYPE html>

<html lang="en">
<head>
    <title>Web Applications and Technologies</title>
    <link type="text/css" rel="stylesheet" href="/style/main.css"/>

</head>
<body>
<header>
    <h1>Alicia Brown C3609527</h1>
</header>
<section id="container">
    <h1>Fundamentals of PHP</h1>

    <?php
    echo "<h1>Selection</h1>";
    $day = date('l'); //that is a lower case L

    if ($day == "Wednesday")
        echo "<p> it is midweek </p>";
    else
        echo "<p>it is not midweek </p>";

    echo 'it\'s ' . $day;
    echo "<br>";


    // G returns time from 0 to 24
    $time = date('G');

    if ($time < 12)
        echo "<p> Good Morning </p>";
    else if ($time >= 12 && $time <= 18)
        echo "Good Afternoon";

    else if ($time > 18 && $time <= 24)
        echo "Good Night";


    $password = "weffhgf";
    // get the number of characters in the password
    $passwordLength = strlen($password);

    // check the password is between 4 and 10
    if ($passwordLength > 4 && $passwordLength < 10)
        // checks the password is not password or username
        if ($password != "password" || $password != "username")
            echo "Password is valid" . "<br>";
        else
            echo "Password is invalid" . "<br>";


    $age = 15;
    $initialPrice = 25;
    $finalPrice = 0;
    $member = true;

    if ($age < 12)
        $finalPrice = $initialPrice / 2;
    else if ($age > 12 && $age < 18)
        $finalPrice = $initialPrice * 0.75;
    else if ($age > 65)
        $finalPrice = $initialPrice * 0.75;
    if ($member == true)
        $finalPrice = $finalPrice * 0.90;
    echo "<p>Initial ticket price: " . $initialPrice;
    echo "<p>Age: " . $age;
    echo "<p>Member: " . $member;
    echo "<p>Final Ticket Price: " . $finalPrice;


    echo "<H1>Arrays</H1>";
    echo "<H3>Simple Arrays</H3>";

    $products = array(0 => 't-shirt', 1 => 'cap', 2 => 'mug');
    echo "The item at position \$products[0] is " . $products[0] . "<br>";
    echo "The item at position \$products[1] is " . $products[1] . "<br>";
    echo "The item at position \$products[2] is " . $products[2] . "<br>";
    $products[1] = "Skirt";

    print_r($products);

    // new part**

    echo "<h1>Associative Array</h1>";

    $customer = array(
        "CustomerID" => 12, "CustomerName" => "Sarah", "CustomerAge" => 23, "CustomerGender" => "f");
    print_r($customer);

    echo "<br>";

    $customer = array(
        "CustomerID" => 12, "CustomerName" => "Sarah", "CustomerAge" => 23, "CustomerGender" => "f", "CustomerEmail" => "Sarah@gmail.com");
    print_r($customer);

    echo "<br>";

    echo "The items in my customer array";
    echo "<br>";
    echo "The item at index (CustomerName) is: " . $customer["CustomerName"];
    echo "<br>";
    echo "The item at index (CustomerEmail) is: " . $customer["CustomerEmail"];
    echo "<br>";

    echo "<br>";

    $stockID1 = array(
        "Description" => "T-shirt", "Price" => 9.99, "Stock" => 100,
        "Colour" => array("Blue", "Green", "Red"));

    $stockID2 = array(
        "Description" => "Cap", "Price" => 4.99, "Stock" => 50,
        "Colour" => array("Blue", "Black", "Grey"));

    $stockID3 = array(
        "Description" => "Mug", "Price" => 6.99, "Stock" => 30,
        "Colour" => array("Yellow, Green, Pink"));


    echo "This is my order <br>";

    echo "{$stockID1["Colour"][1]} {$stockID1["Description"]} <br> Price: £{$stockID1["Price"]}";

    echo "<br>";

    echo "{$stockID2["Colour"][2]} {$stockID2["Description"]} <br> Price: £{$stockID2["Price"]}";


    echo "<h2>Loops</h2>";
    echo "<h3>While loop</h3>";
    $counter = 1;
    while ($counter < 6) {
        echo "Count: $counter<br>";
        $counter++;
    }
    echo "<br>";
    $counter = 1;
    $shirtPrice = 9.99;


    echo "<table><tr><th>Quantity</th><th>Price</th></tr>";
    while ($counter <= 10) {
        $total = $counter * $shirtPrice;
        echo "<tr><td>$counter</td><td>$total</td></tr>";
        $counter++;
    }

    echo "</table>";
    echo "<h3>For loop</h3>";

    $names = array("Peter", "Kat", "Laura", "Ali", "Popacatapetal");
    for ($i = 0; $i < count($names); $i++) {
        echo "$names[$i] <br>";
    }


    echo "<h3>For Each loop</h3>";
    $names = array(array("Name" => "Peter", "ID" => "c123456"),
        array("Name" => "Kat", "ID" => "c654321"),
        array("Name" => "Laura", "ID" => "c987654"),
        array("Name" => "Ali", "ID" => "c654987"),
        array("Name" => "Popacatapetal", "ID" => "c765984"));

    for ($x = 0; $x < count($names); $x++) {
        foreach ($names[$x] as $key => $value) {
            echo "$key: $value ";
        }
        echo "<br>";
    }


    echo "<h3>strtolower() & ucfirst()</h3>";
    $city = array('Peter' => 'LEEDS', 'Kat' => 'bradford', 'Laura' => 'wakeFIeld');
    print_r($city);

    echo "<br>";
    foreach ($city as $key => $value) {
        $city[$key] = ucfirst(strtolower($value));
    }
    print_r($city);


    echo "<h2>Some Useful Functions</h2>";
    $password = "password";
    $password = htmlentities(trim($password));
    echo "Password is: $password<br>";

    if (isset($password) and !empty($password)) {
        if (strlen($password) >= 6 and strlen($password) <= 8) {
            if (!is_numeric($password)) {
                echo "Password OK";
            } else echo "Password cannot be a number";
        } else echo "Your password must be between 6 and 8 characters in length";
    } else echo "Please enter a password.";


    ?>
</section>
<footer>
    <small> <a href="../watIndex.html">Home</a></small>
</footer>
</body>
</html>