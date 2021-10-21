<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processing Form</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Processing Form</h1>
    <?php
        // process the form

        $username = $_POST["username"];

        $email = $_POST["email-address"];

        // validation

        if(empty($username)) {
            print("Username cannot be empty.");
        }

        else if(empty($email)) {
            print("Email cannot be empty.");
        }

        else if(!preg_match('/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}$/i', $email)) {
            print("Email is invalid.");
        }

        else if(!(strlen($username) > 2)) {
            print("Username must be more than 2 characters.");
        }

        // passed validation
        else {
            print("<p>Thank you for signing up. Your username is " . $username . " and your email address is " . $email . "</p>");
        }

        // dump the whole POST superglobal
        // print("<pre>");
        // var_dump($_POST);
        // print("</pre>");

    ?>
</body>
</html>
