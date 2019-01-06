<?php

$User = @$_POST['User'];
$Email = @$_POST['Mail'];
$Pass = @$_POST['Pass'];
$PPass = @$_POST['PPass'];



// sleep for 2 seconds
sleep(2);

echo "نام شما: $User <br>";
echo "پست الکترونیک شما: $Email <br>";
echo "پسورد: $Pass <br>";
echo "وضعیت تایید پسورد: $PPass <br>";


/*
$FileName = 'Definitions/Config.php';
    $D_B_H="localhost";
    $D_B_U="root";
    $D_B_P="";

    $my_file = $FileName;
    $handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file); //implicitly creates file
    $data1 = "<?php \n //Database Connect Information";

    $data2 = '$DB_Host='.'"'."$D_B_H".'"'.';                      //It is usually "/localhost/" ';

    $data3 = '$DB_User='.'"'."$D_B_U".'"'.';                           //Database Username ';

    $data4  = '$DB_Pass='.'"'."$D_B_P".'"'.';                                //Database Password ';

    fwrite($handle, $data1."\n\n\n");
    fwrite($handle, $data2."\n\n");
    fwrite($handle, $data3."\n\n");
    fwrite($handle, $data4."\n\n?>");
    echo "Create SucseesFully...";
*/
?>