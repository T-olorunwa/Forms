<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
    <body>
        <h1 >Zuri Training</h1>
        <form action="user_data.php" method="POST">
            <label for="name">
                Name: <input type="text" name= "name">
            </label> <br>
            <label for="e-mail">
                E-mail: <input type="text" name= "e-mail">
            </label> <br>
            <label for="D.O.B">
                D.O.B: <input type="date" name= "date">
            </label> <br>
            <label for="gender">
                Gender: <input type="" name= "name">
            </label> <br>
            <label for="country">
                Country: <input type="country" name= "country">
            </label> <br>
            <button type="submit"> Submit here</button>
        </form>
        <?php
        print_r($_POST)
        ?>

    </body>
</html>