<?php

$z = $_GET["i"];
$y = $z + 5;

$dbms = new mysqli("localhost", "id16867443_product1", "c1MvQz~~%vg^}HTm", "id16867443_product", "3306");
$q = "SELECT * FROM user LIMIT " . $z . "," . $y . ";";
$resultset = $dbms->query($q);
$n = $resultset->num_rows;


if ($n > 3) {

    for ($x = 0; $x < 4; $x++) {
        $d = $resultset->fetch_assoc();
?>



        <div class="col-3 col-lg-3 botom">


            <div class="cardh">
                <img src="<?php echo $d["file_path"]; ?>" class="card-img-top size">
                <div>
                    <h5 class="card-title t"><?php echo $d["name"]; ?></h5>
                    <p class="card-text t"><?php echo $d["discription"]; ?></p>
                </div>
                <div>
                    <hr />

                    <span class=" c t">Price(LKR): <?php echo $d["price"]; ?></span>
                    <span class=" c t">Qty: <?php echo $d["quantity"]; ?></span>
                </div>
            </div>

        </div>


    <?php

    }
    ?>
    <?php
} else {

    for ($x = 0; $x < 2; $x++) {
        $d = $resultset->fetch_assoc();
    ?>



        <div class="col-3 col-lg-3 botom">


            <div class="cardh">
                <img src="<?php echo $d["file_path"]; ?>" class="card-img-top size">
                <div>
                    <h5 class="card-title t"><?php echo $d["name"]; ?></h5>
                    <p class="card-text t"><?php echo $d["discription"]; ?></p>
                </div>
                <div>
                    <hr />

                    <span class=" c t">Price(LKR): <?php echo $d["price"]; ?></span>
                    <span class=" c t">Qty: <?php echo $d["quantity"]; ?></span>
                </div>
            </div>

        </div>


<?php

    }
}
?>