<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Table</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .third{
            width:32.9%;
            display: inline-block;
            padding: 10px;
            margin-bottom: 15px;
        }
        .third input{
            font-size: 18px;
            padding:10px;
        }

        body{
            font-size: 20px;
        }

        .blackback {
            background-color: rgb(214, 208, 208);
            border-radius: 5px;
            padding:20px;
        }
        </style>
</head>
<body>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "phpcrud") or die ("Sorry cannot connect to MySQL");

        $sql = "SELECT * FROM people";

        $query = mysqli_query($conn,$sql);

        echo "</br><div class='blackback' style='width:80%; margin:auto;'><h1>People Table</h1>";

        echo "<table class='table' style='border-color:white;'>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
     
                </tr>";
        while ($row = mysqli_fetch_array($query))
        {
            echo "<tr>
                    <td>" . $row['id'] . "</td>
                    <td>" . $row['fname'] . "</td>
                    <td>" . $row['sname'] . "</td>
                    <td>"  .$row['age'] . "</td>
              
                </tr>";
        };
        echo "</table></div></br>";
    ?>

    
    <div class='blackback' style='width:80%; margin:auto; height:auto; height:75px;'>

    <button class="btn btn-danger" onclick="location.href = 'index.php'" style="float: right;" >Back</button>

    </div>
</body>
</html>