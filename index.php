<?php
    ob_start();  
    include 'conn.php';
    $wrongPassMsg = ""; 
?>
<?php
    if(isset($_POST["login_submit"])) {
        $email = $_POST['login_email'];
        $password = $_POST['login_password'];

        if (!empty($email) && !empty($password)) {
             
            $SELECT = "SELECT * From user Where email = '$email' Limit 1";

            $result = mysqli_query($conn, $SELECT);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $_SESSION["manager"] = $row["manager"];
                    $_SESSION["restaurant"] = $row["restaurant"];
                    $_SESSION["email"] = $row["email"];
                    $_SESSION["phone"] = $row["phone"];
                    $pass = $row["password"];
                }
            }
            if ($pass == $password) {
                $wrongPassMsg = "";
                header("Location: home.php");
            } else {
                $wrongPassMsg = "* Wrong password, try again!";
            }        
        } else {
            echo "All field are required";
            die();
        }
    
    }
?>

<html>
    <head>
        <title>Restaurant Billing System</title>
        <link rel ="stylesheet" type = "text/css" href ="css/style.css">
        <link rel ="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
        <link rel ="stylesheet" href = "https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class = "container">
            <div class="header">
                <img src ="css/logo.png" style="width:100px; margin-top:30px; margin-left:120px">
                <h1 style="color: white; font-family:Bahnschrift; margin-left:85px;">WELCOME!</h1>
            </div>
            <div class = "col-lg-4" id="ul">
                <form action="" method = "post">
                    <div class="form-group">
                        <label for="login_email">Email</label>
                        <input type="email" name = "login_email" class="form-control" id="login_email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="login_pwd">Password</label>
                        <input type="password" name = "login_password" class="form-control" id="pwd" placeholder="Password"required>
                    </div>
                    <p style="color: red; font-weight: 600;"> <?php echo $wrongPassMsg; ?> </p>
                    <button type="submit" name = "login_submit" class="btn btn-primary btn-block btn-lg">Login</button><br>
                    <div class="form-group">
                        <a href="register.php">Don't have an account?</a>
                    </div>
                </form>
            </div>          
        </div>
        <div class = "footer">
        <hr>
            <p style="color: white;">©️ Copyright. All right reserved</p>
        </div>
    </body>
</html>

