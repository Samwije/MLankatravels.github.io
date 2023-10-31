<?php

session_start();

include './dbconnection.php';


$startfrom = $_POST['startfrom'];
$couplex = $_POST['couplex'];
$datex = $_POST['datex'];
$monthx = $_POST['monthx'];
$yearx = $_POST['yearx'];
$coupley = $_POST['coupley'];
$datey = $_POST['datey'];
$monthy = $_POST['monthy'];
$yeary = $_POST['yeary'];


$s = "select * from romanticgateway";


$result = mysqli_query($con, $s);

$row = mysqli_num_rows($result);

try {
    if ($row == 1) {

        while ($ro = mysqli_fetch_array($result)) {
            $id = $ro['idromanticgateway'];
            print $id;
            $updt = "update romanticgateway set startfrom='$startfrom',couplex='$couplex',datex='$datex',monthx='$monthx',yearx='$yearx',coupley='$coupley',datey='$datey',monthy='$monthy',yeary='$yeary' where idromanticgateway='$id'";
        }

        mysqli_query($con, $updt);
        header("location:home.php");
    } else {
        $reg = "insert into romanticgateway (startfrom,couplex,datex,monthx,yearx,coupley,datey,monthy,yeary)values('$startfrom','$couplex','$datex','$monthx','$yearx','$coupley','$datey','$monthy','$yeary')";

        mysqli_query($con, $reg);
        header("location:home.php");
    }
} catch (Exception $exc) {
    echo $exc;
    print $exc;
}
?>