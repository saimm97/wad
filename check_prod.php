<?php
require "server/functions.php";


$e = $_REQUEST["e"];
$sel_prod = "select * from products where pro_title= '$e'";
$run_prod  = mysqli_query($con,$sel_prod);
$count = mysqli_num_rows($run_prod);
if($count<0) {


    $get_pro = "select * from products";
    $run_pro = mysqli_query($con, $get_pro);
    $count_pro = mysqli_num_rows($run_pro);
    if ($count_pro == 0) {
        echo "<h2> No Product found in selected criteria </h2>";
    } else {
        $i = 0;
        while ($row_pro = mysqli_fetch_array($run_pro)) {
            $pro_id = $row_pro['pro_id'];
            $pro_cat = $row_pro['pro_cat'];
            $pro_brand = $row_pro['pro_brand'];
            $pro_title = $row_pro['pro_title'];
            $pro_price = $row_pro['pro_price'];
            $pro_image = $row_pro['pro_image'];
        }


    }
}
