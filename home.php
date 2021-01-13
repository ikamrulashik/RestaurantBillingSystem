<html>
    <head>
        <title>Home</title>
    </head>
    <body>
        <p>Welcome to restaurant billing system</p>
    </body>
    <a href="logout.php">logout</a>
    <body>
	    <?php include 'topbar.php' ?>
	    <?php include 'navbar.php' ?>
        <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-body text-white">
        </div>
        </div>
        <main id="view-panel" >
        <?php $page = isset($_GET['page']) ? $_GET['page'] :'home'; ?>
  	        <?php include $page.'.php' ?>
        </main>

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    </div>
  </div>
</body>
</html>