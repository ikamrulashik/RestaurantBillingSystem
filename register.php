<?php
    ob_start();  
    include 'conn.php'; 
?>
<html>
    <head>
        <title>Restaurant Billing System</title>
        <link rel ="stylesheet" type = "text/css" href ="style.css">
        <link rel ="stylesheet" type = "text/css" href ="bootstrap.min.css">
        <link rel ="stylesheet" href = "https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class = "container">
            <div class = "col-lg-4" id="ul2">
                <form action="" method = "post">
                    <div class="form-group">
                        <label for="manager">Manager Name</label>
                        <input type="name" name = "manager" class="form-control" id="manager" placeholder="Manager Name" required>
                    </div>
                    <div class="form-group">
                        <label for="restaurant">Restaurant Name</label>
                        <input type="name" name ="restaurant" class="form-control" id="restaurant" placeholder="Restaurant Name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name = "email" class="form-control" id="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="phone" name = "phone" class="form-control" id="phone" placeholder="Phone" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password</label>
                        <input type="password" name = "password" class="form-control" id="pwd" placeholder="Password" required>
                    </div>
                    <button type="submit" name = "submit" class="btn btn-primary btn-block btn-lg">Create an account</button><br>
                    <div class="form-group">
                        <a href="index.php">Already have an account?</a>
                    </div>
                </form>
            </div>
            <br>
        </div>
        <div class = "footer">
        <hr>
            <p style="color: white;">©️ Copyright. All right reserved</p>
        </div>
    </body>
</html>
<?php
    if(isset($_POST["submit"])) {

        $manager = $_POST['manager'];
        $restaurant = $_POST['restaurant'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        if (!empty($manager) || !empty($restaurant) ||!empty($password) || !empty($email) || !empty($phone)) {
             
            $SELECT = "SELECT email From user Where email = ? Limit 1";
            $INSERT = "INSERT Into user (manager,restaurant, password, email, phone) values(?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($email);
            $stmt->store_result();
            $rnum = $stmt->num_rows;

            if ($rnum==0) {
                $stmt->close();
                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("ssssi", $manager, $restaurant, $password, $email, $phone);
                $stmt->execute();
                echo "Registration Successfully";
            } else {
                echo "This email is already used";
            }
            
            header("location:index.php"); 
            $stmt->close();
            $conn->close();
            
        } else {
            echo "All field are required";
            die();
        }
    }
?>