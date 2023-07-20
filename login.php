<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="mystyles.css"/>
</head>
<body>
</br>
    <div class="third">
    </div>
    <div class="third blackback">
        <h1>Log in</h1>
        <form method="post" action="login_script.php">
            
            <label for="email">Email</label>
            <input name="email" type="email" class="form form-control" required />
            </br>
            <label for="pword">Password</label>
            <input name="pword" type="password" class="form form-control" required />
            </br>
            <button type="submit" class="btn btn-primary" style="float:right;">Login</button>
        </form>
    </div>
    <button style="float:right; margin-right: 20px;" class="btn btn-danger" onclick="location.href = 'index.php'" >Back</button>
    <div class="third"></div>
    <div class="third blackback">
        Don't have an account?  
        <button style="margin-left:10px;" class="btn btn-primary">Sign up</button>
    </div>
</body>
</html>