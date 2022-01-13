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

    
<section class="signup-form">
    <h2> Sign Up</h2>
    <form action="includes/signup.inc.php" method="post">
    
    <input type="text" name="nume" placeholder="Nume...">
    <br>
    <input type="text" name="email" placeholder="Email...">   
    <br>
    <input type="text" name="uid" placeholder="Username...">
    <br>
    <input type="password" name="pwd" placeholder="Parola...">
    <br>
    <input type="password" name="pwdrepeat" placeholder="Confirma parola...">   
    <br>
    <button type="submit" name="Submit"> Sign up </button>
        
    </form>

    <?php
    if(isset($_GET["error"]))
    {
        if($_GET["error"] == "emptyinput")
        {
            echo "<p> Fill in all fields.</p>";
        }
        else if($_GET["error"] == "invaliduid")
        {
            echo "<p> Choose a proper username.</p";
        }
        else if($_GET["error"] == "invalidemail")
        {
            echo "<p> Choose a proper email.</p";
        }
        else if($_GET["error"] == "passwordsdontmatch")
        {
            echo "<p> Passwords don't match.</p";
        }
        else if($_GET["error"] == "stmtfailed")
        {
            echo "<p> Something went wrong. Try again.</p";
        }
        else if($_GET["error"] == "usernametaken")
        {
            echo "<p> Username taken.</p";
        }
        else if($_GET["error"] == "none")
        {
            echo "<p> You have signed up.</p";
        }
    }
    ?>
    
</section>

    
</html>