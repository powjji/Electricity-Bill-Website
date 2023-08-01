<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function connect_to_database(){
    $dbhost = "localhist";
    $dbuser = "root";
    $dbpass = "";
    $db = "class_php";
    try {
        $conn = mysqli_connect($dbhost,$dbuser,$dbpass);
    }
    catch (Exception $e){
        echo "failed to connect to database: " . $e->getMessage();
    }
    
}


?>
    <form action="" method="POST">
        <label for="username">username</label>
        <input type="text" name="username" id="username" >
        <br>
        <label for="password">password</label>
        <input type="text" name="password" id="password">
        <!-- <br> -->
        <!-- <label for="entry3">security code</label>
        <input type="text" name="entry3" id="entry3"> -->
        <br>
        <input type="submit" name="submit" id="submit">
        <hr>
        <div>
            <?php
            if(!isset($_POST["submit"])) {
                if ($_POST['username'] == "") {
                    echo "please enter your username";
                } elseif ($_POST['password'] == "") {
                    echo "please enter your password";
                } else {
                    if (mysqli_connect_error()){
                        echo "failed to connect to database: ". mysqli_connect_error();
                    }


                }
            }
            ?>

        </div>
    </form>
</body>
</html>