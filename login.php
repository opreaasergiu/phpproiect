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
    

    
<section class="login-form">
    <h2> Log in </h2>
    <form action="includes/login.inc.php" method="post">
    
    <input type="text" name="uid" placeholder="Userame/Email...">
    <br>
    <input type="password" name="pwd" placeholder="Parola...">
    <br>    
    <button type="submit" name="Submit"> Log in </button>
        
    </form>
    
    <?php
    if(isset($_GET["error"]))
    {
        if($_GET["error"] == "emptyinput")
        {
            echo "<p> Fill in all fields.</p>";
        }
        else if($_GET["error"] == "wronglogin")
        {
            echo "<p> Incorrect login information.</p";
        }
        else if($_GET["error"] == "none")
        {
            echo "<p> You have signed up.</p";
        }
    }
    ?>
    
</section>

    
    
</html>