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
$pass2y = $_POST['pass2y'];
$pass3y = $_POST['pass3y'];
$pass46y = $_POST['pass46y'];
$pass79y = $_POST['pass79y'];
$pass1015y = $_POST['pass1015y'];
$datey = $_POST['datey'];
$monthy = $_POST['monthy'];
$yeary = $_POST['yeary'];
$pass2z = $_POST['pass2z'];
$pass3z = $_POST['pass3z'];
$pass46z = $_POST['pass46z'];
$pass79z = $_POST['pass79z'];
$pass1015z = $_POST['pass1015z'];
$datez = $_POST['datez'];
$monthz = $_POST['monthz'];
$yearz = $_POST['yearz'];


$s = "select * from casinonightlife";


$result = mysqli_query($con, $s);

$row = mysqli_num_rows($result);

try {
    if ($row == 1) {
        while ($ro = mysqli_fetch_array($result)) {
            $id = $ro['idcasinonightlife'];
            print $id;
        $updt = "update casinonightlife set startfrom='$startfrom',pax2x='$pass2x',pax3x='$pass3x',pax46x='$pass46x',pax79x='$pass79x',pax1015x='$pass1015x',datex='$datex',monthx='$monthx',yearx='$yearx',pax2y='$pass2y',pax3y='$pass3y',pax46y='$pass46y',pax79y='$pass79y',pax1015y='$pass1015y',datey='$datey',monthy='$monthy',yeary='$yeary',pax2z='$pass2z',pax3z='$pass3z',pax46z='$pass46z',pax79z='$pass79z',pax1015z='$pass1015z',datez='$datez',monthz='$monthz',yearz='$yearz' where idcasinonightlife='$id'";
        }

        mysqli_query($con, $updt);
        header("location:home.php");
    } else {
        $reg = "insert into casinonightlife (startfrom,pax2x,pax3x,pax46x,pax79x,pax1015x,datex,monthx,yearx,pax2y,pax3y,pax46y,pax79y,pax1015y,datey,monthy,yeary,pax2z,pax3z,pax46z,pax79z,pax1015z,datez,monthz,yearz)values('$startfrom','$pass2x','$pass3x','$pass46x','$pass79x','$pass1015x','$datex','$monthx','$yearx','$pass2y','$pass3y','$pass46y','$pass79y','$pass1015y','$datey','$monthy','$yeary','$pass2z','$pass3z','$pass46z','$pass79z','$pass1015z','$datez','$monthz','$yearz')";

        mysqli_query($con, $reg);
        header("location:home.php");
    }
} catch (Exception $exc) {
    echo $exc;
    print $exc;
}
?>