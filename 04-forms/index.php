<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>User Form</title>
</head>
<body>
    <h1>User Form</h1>

    <form action="process-form.php" method="post">

        <label for="username">Username</label>
        <input type="text" name="username" id="username">

        <label for="email-address">Email Address</label>
        <input type="email" name="email-address" id="email-address">

        <input type="submit" value="Sign Up">
    </form>
    
</body>
</html>