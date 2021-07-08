<!DOCTYPE html>
<html>

<head>
    <title>Windows product Registreation</title>
    <link href="img/ecommerce-icon-round-design-template-thin-line-vector-14240308-removebg-preview.png" rel="icon" />
    <link href="window.css" rel="stylesheet" />
    <link href="bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="alert/dist/sweetalert.css">

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-12 bg">

                <div class="row">
                    <div class="col-12 col-lg-12 de1"></div>

                </div>
                <div class="row">
                    <div class="col-7 col-lg-7 d0">
                        <h4 class="h4t">Windows Products</h4>
                        <div class="row">
                            <div class="col-6 col-lg-6 top">
                                <form class="row g-3 " action="windowsprocess.php" method="POST" enctype="multipart/form-data">
                                    <div class="col-md-6">
                                        <label class="form-label t">Brand</label>
                                        <select class="form-control" name="b">
                                            <?php
                                            $dbms = new mysqli("localhost", "id16867443_product1", "c1MvQz~~%vg^}HTm", "id16867443_product", "3306");
                                            $q = "SELECT * FROM brand;";
                                            $resultset = $dbms->query($q);
                                            $n = $resultset->num_rows;

                                            for ($x = 0; $x < $n; $x++) {
                                                $d = $resultset->fetch_assoc();
                                            ?>
                                                <option value="<?php echo $d["id"]; ?>"><?php echo $d["name"]; ?></option>

                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label t">Name/Model</label>
                                        <input type="text" class="form-control" name="n">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label t">Quantity</label>
                                        <input type="text" class="form-control" name="q" placeholder="0">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label t">Unit price(LKR)</label>
                                        <input type="text" class="form-control" name="p" placeholder="0.00">
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label t">Discription</label>
                                        <input type="text" class="form-control" name="d">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label t">Product images</label>
                                        <input type="file" class="form-control" name="f">
                                    </div>
                                    <hr />

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary col-12 col-lg-12"><i class="fa fa-registered"></i> Register</button>
                                    </div>
                                </form>
                                <div class="col-12 top">
                                    <button onclick="gotohome();" class="  btn btn-secondary col-12 col-lg-12"><i class="fa fa-undo"></i> Back to home</button>

                                </div>

                            </div>
                            <div class="col-6 col-lg-6 d2 top">
                                <img src="img/male-warehouse-workers-check-stock-260nw-1727805166-removebg-preview.png" class="i1" />

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="center">
                            <button class="glow-on-hover" onclick="viewdata();" type="button">View Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>