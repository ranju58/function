<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function display_loggedin_user_details($name, $password){
        echo $name ." Logged in with password". $password;
    }
    


if (isset($_POST["submit"])) {
    // echo $_POST['name'];
    // echo $_POST['password'];
    display_loggedin_user_details($_POST['name'], $_POST['password']);


}
if (isset($_POST["Login"])) {
    // echo $_POST['name'];
    // echo $_POST['password'];
    display_loggedin_user_details($_POST['address'], $_POST['phone']);


}

    ?>

    <form action="" method="post">
        <input type="text" placeholder="enter username" name="name"><br>
        <input type="password" placeholder="enter password" name="password"><br>
        <input type="submit" value="submit" name="submit"><br>
    </form>
    <form action="" method="post">
        <input type="text" placeholder="enter address" name="address"><br>
        <input type="password" placeholder="enter phone" name="phone"><br>
        <input type="submit" value="Login" name="Login"><br>
    </form>
</body>

</html>