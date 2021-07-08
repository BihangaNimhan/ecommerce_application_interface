<?php

$brand = $_POST["b"];
$pname = $_POST["n"];
$quantity = $_POST["q"];
$price = $_POST["p"];
$discription = $_POST["d"];

$fname = $_FILES["f"]["name"];
$ftype = $_FILES["f"]["type"];
$fsize = $_FILES["f"]["size"];
$ftmp = $_FILES["f"]["tmp_name"];

if (empty($pname)) {
?>
    <script>
        alert("Enter name!!!");
        window.location = "android.php";
    </script>
<?php

}else if(empty($brand)){
    ?>
    <script>
        alert("Enter Brand!!!");
        window.location = "android.php";
    </script>
<?php
}else{
    $today = date("YmdHis");
    $name = "productimages//" . $today . $fname;
    move_uploaded_file($ftmp, $name);

    $dbms = new mysqli("localhost", "id16867443_product1", "c1MvQz~~%vg^}HTm", "id16867443_product", "3306");
    $q = "INSERT INTO user (`brand_id`,`name`,`quantity`,`price`,`discription`,`file_path`)VALUES('" . $brand . "','" . $pname . "','" . $quantity . "','" . $price . "','" . $discription . "','" . $name . "');";
    $dbms->query($q);
    ?>
    <script>
        alert("Registration success");
        window.location = "android.php";
    </script>
<?php

}



