<!DOCTYPE html>
<html>

<head>
    <title>Windows product Registreation</title>
    <link href="img/ecommerce-icon-round-design-template-thin-line-vector-14240308-removebg-preview.png" rel="icon" />
    <link href="view.css" rel="stylesheet" />
    <link href="bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">



</head>

<body onload="m(0)">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-12 bg">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="gradient-border">Product View</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="input-group ds2 ">
                            <div class="form-outline ">
                                <input type="search" class="form-control t" placeholder="Enter product name" id="c" onkeyup="searchp();" />
                            </div>
                            <button class="btn btn-success">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-12 top d1 ">
                        <div class="row d1 " id="d1">

                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-12 d2" id="d2">
                    </div>
                    <div class="btng">

                        <?php
                        $dbms = new mysqli("localhost", "id16867443_product1", "c1MvQz~~%vg^}HTm", "id16867443_product", "3306");
                        $q = "SELECT * FROM user;";
                        $resultset = $dbms->query($q);
                        $r = $resultset->num_rows;
                        $n = $r / 4;
                        $x = 1;

                        ?>
                        <button class="glow-on-hover" onclick="m(<?php echo $a / 4; ?>)"><i class="fa fa-arrow-left"></i></button>
                        <?php
                        for ($a = 0; $a < $n; $a++) {
                        ?>
                            <button class="glow-on-hover" onclick="m(<?php echo $a * 4; ?>)"><?php echo $a; ?></button>
                        <?php

                        }
                        ?>
                        <button class="glow-on-hover" onclick="m(<?php echo $r * 4; ?>)"><i class="fa fa-arrow-right"></i></button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>