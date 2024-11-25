<?php

@session_start();

    if (array_key_exists("username", $_POST))
    {
        if ($_POST["username"] == "etec" && $_POST["password"] == "123")
        {
            $_SESSION["username"] = $_POST["username"];
        }

        header("Location: index.php");  // Redirect
    }
    else
    {
        die("Incorrect post data");
    }
?>