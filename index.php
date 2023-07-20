<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="mystyles.css"/>

    <script language="javascript">
        function no(){
            alert("no <3");
        }
    </script>
    
</head>
<body>
    </br>
    <div class="third">
    </div>
    <div class="third blackback">
        <h1>Enter Details</h1>
        <form action="form_submitted.php" method="POST">
            <label for="fname">Firstname</label>
            <input name ="fname" type="text" placeholder="e.g. John" class="form form-control" required/>
            </br>
            <label for="sname">Surname</label>
            <input name ="sname" type="text" placeholder="e.g. Smith" class="form form-control" required/>
            </br>
            <label for="age">Age</label>
            <input name ="age" type="number" max="100" min="1" placeholder="e.g. 42" class="form form-control" required/>
            </br>
            <button type="submit" class="btn btn-primary" style="float:right;">Submit</button>
        </form>
    </div>
    <button style="float:right; margin-right: 20px;" class="btn btn-primary" onclick="location.href = 'login.php'" >Log in / Sign up</button>
    <div class="third"></div>
    <div class="third blackback">
        <button class="btn btn-primary" style="width:32.7%;" onclick="location.href = 'edit_table.php'">Edit Table</button>      
        <button class="btn btn-primary" onclick="location.href = 'view_table.php'" style="width:32.7%;">View Table</button>
        <button class="btn btn-danger" onclick="no();" style=" width:32.7%;">Delete Table</button>
    </div>
</body>
</html>