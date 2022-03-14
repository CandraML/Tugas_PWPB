<?php 
    require 'connection.php';
    // If the user is not logged in redirect to the login page...
    if (!isset($_SESSION['loggedin'])) {
        header('Location: formLogin.php');
        exit;
    }
    $email = $_SESSION['email'];
    $query  = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>   
</head>
 
<body>
    <section>
        <!--- navigation --->
        <nav>
            <!--- logo --->
            <a href="#" class="logo"> Welcome to ACE ANTHEM UNIVERSE</a>
            <!--- menu --->
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">School</a></li>
                <li><a href="#">Friends</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
 
        <!--- text --->
        <center>
            <div class="text-container">
            <p>Congratulations!, you have been joined to ACE ANTHEM UNIVERSE</p>
            <p>ACE ANTHEM UNIVERSE</p>
            <p>you can laugh all day here</p>
            <p>Fresh Memes everyday
            <br>Sheeeeeeeesssshhhh</p>
            <button class="hire-btn"><a href="dataUsers.php">DATA USERS</a></button>
            <button class="down-cv"><a href="logout.php">LOGOUT</a></button>
        </div>
        <!--- text --->
        <img alt="model" class="model" src="gameboy.gif">
    </center>
    </section>  
 
</body>
 
</html>