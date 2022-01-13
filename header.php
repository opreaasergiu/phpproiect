<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    
<head>
    
<title> Organizare Evenimente OSA </title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="css/main.css" />
<!--link rel="stylesheet" href="css/reset.css" /> -->

</head>

    
<body style = "font-family: cursive; color: black; text-align: justify; background-color: white">

    <nav>
        <div class="wrapper">
            <ul>
                <li><a href="index.html"> Acasa </a></li>
                
                <?php
                    if (isset($_SESSION["useruid"]))
                    {
                        echo "<li><a href='includes/logout.inc.php'> Login </a></li>";
                    }
                    else
                    {
                        echo "<li><a href='signup.php'> Sign up </a></li>";
                        echo "<li><a href='login.php'> Login </a></li>";
                    }
                ?>
            </ul>
        </div>
    </nav>
    
<div class="wrapper">