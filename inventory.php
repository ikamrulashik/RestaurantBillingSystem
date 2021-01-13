<?php
    include 'conn.php'; 
?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta charset="UTF-8">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="restaurant" content="Hau Nguyen">
    <title>Restautant Billing System</title>
    <link href="assets/css/font-face.css' %}" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="assets/css/theme.css" rel="stylesheet" media="all">
</head>

<body class="animsition">
    <div class="page-wrapper">
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="../">
                            <h1>Restaurant Billing System</h1>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="dashboard.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="inventory.php">
                                <i class="fas fa-table"></i>Inventory</a>
                        </li>
                        <li>
                            <a href="Product.php">
                                <i class="fas fa-box"></i>Product</a>
                        </li>
                        <li>
                            <a href="billing.php">
                                <i class="fas fa-shopping-cart"></i>Billing</a>
                        </li>

                        <li>
                            <a href="logout.php">
                                <i class="fa fa-power-off"></i>logout</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="../">
                    <h3>Restaurant Billing</h3>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a class="js-arrow" href="dashboard.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="active">
                            <a href="inventory.php">
                                <i class="fas fa-table"></i>Inventory</a>
                        </li>
                        <li>
                            <a href="Product.php">
                                <i class="fas fa-box"></i>Product</a>
                        </li>
                        <li>
                            <a href="billing.php">
                                <i class="fas fa-shopping-cart"></i>Billing</a>
                        </li>
                        <li>
                            <a href="logout.php">
                                <i class="fa fa-power-off"></i>logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-container">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="table-responsive m-b-40">
                            <table class="table table-borderless table-data3">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Category</th>                                       
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $sql = "SELECT product_name, category from Product ";
                                $result = $conn-> query($sql);

                                if ($result -> num_rows > 0) {
                                    while ($row = $result-> fetch_assoc()) {
                                        echo "<tr><td>".$row["product_name"]."</td><td>".$row["category"]."</td></tr>";
                                    }
                                    echo "</table>";
                                }
                                else {
                                    echo "0 result";
                                }
                                
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                    <p>Copyright © Kamrul</p>
                                </div>
                        </div>
                    </div>
            </div>
        </div>

    </div>
    <script src="assets/vendor/jquery-3.2.1.min.js"></script>
    <script src="assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <script src="assets/vendor/slick/slick.min.js"></script>
    <script src="assets/vendor/wow/wow.min.js"></script>
    <script src="assets/vendor/animsition/animsition.min.js"></script>
    <script src="assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="assets/vendor/select2/select2.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
</body>
</html>
