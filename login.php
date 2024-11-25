<?php
@session_start();
    if (array_key_exists("username", $_SESSION))
    {
        header("Location: index.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Test</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row my-4">
            <p class="h4">You are not logged in... </p>
            <br /><br />
        </div>
        
        <form action="do-login.php" method="post">
            <div class="row mb-4">
                <div class="form-group col-5">
                    <input type="text" class="form-control" name="username" placeholder="User" />
                </div>
                <div class="form-group col-5">
                    <input type="password" class="form-control" name="password" placeholder="Password" />
                </div>
                <div class="form-group col-2">
                    <input type="submit" class="btn btn-sm btn-outline-primary"></input>
                </div>
            </div>
        </form>
    </div>
</body>
</html>