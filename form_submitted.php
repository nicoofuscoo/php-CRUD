<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submitted</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
         .third{
            width:32.9%;
            display: inline-block;
            padding: 10px;
        }
        .third input{
            font-size: 18px;
            padding:10px;
        }

        body{
            font-size: 20px;
        }
    </style>
</head>
<body>
    <?php
        $conn = mysqli_connect("localhost","root","","phpcrud") or die ("Connection failed");

        $fname = strip_tags($_POST['fname']);
        $sname = strip_tags($_POST['sname']);
        $age = strip_tags($_POST['age']);

        $sql = <<<SQL
            INSERT INTO people (fname, sname, age) VALUES ("{$fname}", "{$sname}","{$age}")
        SQL;
 
        mysqli_query($conn, $sql);

        mysqli_close($conn);

    ?>
    <div class="third"></div>
    <div class="third">
        <h1 style="padding-top :50px;">Thank you for submitting.</h1>
    </br>
    <button class="btn btn-primary" onclick = "location.href = 'index.php'" >Return</button>
    </div>
</body>
</html>