<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Table Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="mystyles.css"/>
    
</head>
<body>
<?php

    $conn = mysqli_connect("localhost","root","","phpcrud")
    or die ("Sorry, can't connect.");

    $id = $_POST['id'];

    $data = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM people WHERE id='$id'"));
        

    ?>
    </br>
    
    <div class="third">
    </div>


    <div class="third blackback">
    <form action="update.php" method="post">

    <input type="hidden" name="id" value="<?php echo $data['id'] ?>"/>
    <p>Edit first name: <input class="form-control" type="text" name="fname" value="<?php echo $data['fname'] ?>"/></p>
    <p>Edit surname: <input class="form-control" type="text" name="sname" value="<?php echo $data['sname'] ?>"/></p>
    <p>Edit age: <input class="form-control" type="text" name="age" value="<?php echo $data['age'] ?>"/></p>
    <input class="btn btn-primary" type="submit" value="Update Details" />
    <input class="btn btn-danger" type="button" value="Back" style="display: inline-block; float:right;" onclick="location.href='edit_table.php'"/>
    </form>
   
    </div>
</body>
</html>