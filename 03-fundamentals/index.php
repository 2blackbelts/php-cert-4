<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals</title>
</head>
<body>
    <h1>PHP Fundamentals</h1>

    <h2>Variables</h2>
        <?php
            // declaring variables
            $name = "Jane Smith";
            $age = 30;
            $enrolled = TRUE;

            // using variables (printing them out on the web page)
            print("Name: " . $name);
            print("<br>");
            print("Age: " . $age);
            print("<br>");
            print("Enrolled: " . $enrolled);

            // checking variable type? (string, integer, boolean, float, array....)
            print("<br>");
            print("Name is variable type: " . gettype($name));

        ?>

    <h2>Arrays</h2>
        <?php
            // create shopping list array
            // array's are key => value pairs (0 => bread)
            $shopping_list = [
                "bread",
                "milk",
                "eggs",
                "cheese",
                "toilet paper", 
                "chocolate",
                "batteries",
                "scissors"
            ];

            // printing $shopping_list using print_r
            print("<pre>");
            print_r($shopping_list);
            print("</pre>");

            print("<br>");

            // printing $shopping_list using var_dump
            print("<pre>");
            var_dump($shopping_list);
            print("</pre>");

            print("<br>");

            // print a specific array item
            print($shopping_list[5]);


        ?>

    <h2>Conditional Statements</h2>
    <?php
        // print(date('l jS \of F Y h:i:s A'));
        // https://www.w3schools.com/php/func_date_date.asp
        // https://www.w3schools.com/php/php_operators.asp

        $hour = date('H');
        // $hour = 21;

        if($hour < 12){
            // only run if condition is true  
            print("Good Morning.");
        } elseif($hour > 19){
            print("Good Evening.");
        } else {
            print("Good Afternoon");
        }


    ?>

    <h2>For Loops</h2>

    <p>For Each Loop</p>
    <?php
        foreach($shopping_list as $item) {
            print($item);
            print("<br>");
        }
    ?>

    <p>For Loop (counting)</p>
    <?php
        for ($i=0; $i < 10; $i++) { 
            print("This is loop number " . $i);
            print("<br>");
        }
    ?>
</body>
</html>