<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in script</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="mystyles.css"/>
</head>
<body>
    <?php
        $conn = mysqli_connect("localhost","root","","phpcrud") or die ("Failed to connect to database.");

        $email = $_POST['email'];
        $pword = $_POST['pword'];

        $query = "
                SELECT * FROM logins WHERE email='".$email."' AND pword='".$pword."'
                ";

        $rows = mysqli_num_rows(mysqli_query($conn, $query));

        if ($rows > 0)
        {
            $username = $rows['username'];
            session_start();
            $_SESSION['username'] = $username;
            header("Location: login_script.php");

        }
        else{
            echo 'Log in failed';
        }
    ?>
</body>
</html>