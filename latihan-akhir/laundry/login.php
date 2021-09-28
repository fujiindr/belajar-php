<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="data.php" method = "POST">
    <fieldset>
        <legend>Login</legend>
    <table>
        <tr>
            <td>Username</td>
            <td><input type="text" name="user" required></td>
        </tr>
         <tr>
            <td>Password</td>
            <td><input type="password" name="pass" required></td>
        </tr>
        <tr>
            <th>
                <button type="submit" name="save">Login </button>
            </th>
        </tr>
    </table>
    </fieldset>
    </form>
</body>
</html>
