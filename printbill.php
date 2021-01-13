<?php
    include 'conn.php'; 
?>

<link rel ="stylesheet" type = "text/css" href ="assets/css/bootstrap.min.css">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            $rel="SELECT * FROM product";
            $rs=$con->query($sel);
            while($row=$rs -> fetch_assoc()){

            } 
            ?>
            <div class="row">
                <div class="col-md-6">

                </div>
            </div>

        </div>
    </div>
</div>
