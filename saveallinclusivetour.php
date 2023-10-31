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



$s = "select * from allinclusivetour";


$result = mysqli_query($con, $s);

$row = mysqli_num_rows($result);

try {
    if ($row == 1) {
        while ($ro = mysqli_fetch_array($result)) {
            $id = $ro['idallinclusivetour'];
            print $id;
        $updt = "update allinclusivetour set startfrom='$startfrom',pax2x='$pass2x',pax3x='$pass3x',pax46x='$pass46x',pax79x='$pass79x',pax1015x='$pass1015x',datex='$datex',monthx='$monthx',yearx='$yearx' where idallinclusivetour='$id'";
        }

        mysqli_query($con, $updt);
        header("location:home.php");
    } else {
        $reg = "insert into allinclusivetour (startfrom,pax2x,pax3x,pax46x,pax79x,pax1015x,datex,monthx,yearx)values('$startfrom','$pass2x','$pass3x','$pass46x','$pass79x','$pass1015x','$datex','$monthx','$yearx')";

        mysqli_query($con, $reg);
        header("location:home.php");
    }
} catch (Exception $exc) {
    echo $exc;
    print $exc;
}
?>