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
                        <a class="logo" href="inventory.php">
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
                        <li>
                            <a class="js-arrow" href="dashboard.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="inventory.php">
                                <i class="fas fa-table"></i>Inventory</a>
                        </li>
                        <li>
                            <a href="product.php">
                                <i class="fas fa-box"></i>Product</a>
                        </li>
                        <li  class="has-sub">
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
                            <a href="dashboard.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="inventory.php">
                                <i class="fas fa-table"></i>Inventory</a>
                        </li>
                        <li>
                            <a href="product.php">
                                <i class="fas fa-box"></i>Product</a>
                        </li>
                        <li  class="active">
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
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Billing</h2>
                                </div>
                            </div>
                        </div>
                        <br>
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="date">Date</label>
                                <input type="date" class="form-control" id="date" placeholder="Date">
                                </div>
                                <div class="form-group col-md-6">
                                <label for="customer">Customer</label>
                                <input type="name" class="form-control" id="customer" placeholder="Customer">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="item">Item</label>
                                <select id="item" class="form-control">
                                    <option selected>Select Item...</option>
                                    <option>...</option>
                                </select>
                                </div>
                                <div class="form-group col-md-2">
                                <label for="inputState">Quantity</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Select...</option>
                                    <option>...</option>
                                </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="price">Price</label>
                                    <input type="name" class="form-control" id="price" placeholder="Price">
                                </div>
                            </div>
                            <a class="btn btn-primary" href="echo $form" type="button"> Add</a>
                            <br>
                            <br>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="price">Total : </label>
                                </div>
                            </div>
                                <a class="btn btn-primary" href="printbill.php" type="button"> Print billing recipt</a>
                        </form>
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
