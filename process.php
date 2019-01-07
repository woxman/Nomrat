<?php
//Form_________1
$User_H = @$_POST['User_H'];
$User_D = @$_POST['Name_D'];
$User_D = @$_POST['User_D'];
$User_D = @$_POST['Pass_D'];
//Form_________1

//Form_________2
$User_A = @$_POST['User'];
$Email_A = @$_POST['Mail'];
$Pass_A = @$_POST['Pass'];
$PPass_A = @$_POST['PPass'];
//Form_________2



// sleep for 2 seconds
sleep(2);

echo "نام شما: $User_A <br>";
echo "پست الکترونیک شما: $Email_A <br>";
echo "پسورد: $Pass_A <br>";
echo "وضعیت تایید پسورد: $PPass_A <br>";




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