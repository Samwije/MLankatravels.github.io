<?php

session_start();

include './dbconnection.php';


$startfrom = $_POST['startfrom'];
$pass2x = $_POST['pass2x'];
$pass3x = $_POST['pass3x'];
$pass46x = $_POST['pass46x'];
$pass79x = $_POST['pass79x'];
$pass1015x = $_POST['pass1015x'];
$datex = $_POST['datex'];
$monthx = $_POST['monthx'];
$yearx = $_POST['yearx'];



$s = "select * from luxuryholiday";


$result = mysqli_query($con, $s);

$row = mysqli_num_rows($result);

try {
    if ($row == 1) {
        while ($ro = mysqli_fetch_array($result)) {
            $id = $ro['idluxuryholiday'];
            print $id;
        $updt = "update luxuryholiday set startfrom='$startfrom',pax2x='$pass2x',pax3x='$pass3x',pax46x='$pass46x',pax79x='$pass79x',pax1015x='$pass1015x',datex='$datex',monthx='$monthx',yearx='$yearx' where idluxuryholiday='$id'";
        }

        mysqli_query($con, $updt);
        header("location:home.php");
    } else {
        $reg = "insert into luxuryholiday (startfrom,pax2x,pax3x,pax46x,pax79x,pax1015x,datex,monthx,yearx)values('$startfrom','$pass2x','$pass3x','$pass46x','$pass79x','$pass1015x','$datex','$monthx','$yearx')";

        mysqli_query($con, $reg);
        header("location:home.php");
    }
} catch (Exception $exc) {
    echo $exc;
    print $exc;
}
?>