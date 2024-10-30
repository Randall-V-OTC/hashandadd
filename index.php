<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        include "functions.php";
        //preparedStatements();
        //preparedParameters();
        $newPassword = "Cats";
        $hashedPassword = hashPassword($newPassword);
        echo($hashedPassword);
        //saveCustomer($hashedPassword);

        $enteredPassword = "Cats";
        $savedPassword = $hashedPassword;

        checkPassword($enteredPassword, $savedPassword);

    ?>
</body>
</html>