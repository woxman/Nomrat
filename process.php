<?php
//Form_________1
$User_H = @$_POST['User_H'];
$Name_D = @$_POST['Name_D'];
$User_D = @$_POST['User_D'];
$Pass_D = @$_POST['Pass_D'];
//Form_________1


// sleep for 2 seconds
sleep(2);



$FileName = 'Definitions/Config.php';
    $D_B_H="$User_H";
    $DB_Name = "$Name_D";
    $D_B_U="$User_D";
    $D_B_P="$Pass_D";

    $my_file = $FileName;
    $handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file); //implicitly creates file
    $data1 = "<?php \n //Database Connect Information";

    $data2 = '$DB_Host='.'"'."$D_B_H".'"'.';                      //It is usually "/localhost/" ';

    $data3 = '$DB_Name='.'"'."$DB_Name".'"'.';                      //It is usually "/localhost/" ';

    $data4 = '$DB_User='.'"'."$D_B_U".'"'.';                           //Database Username ';

    $data5  = '$DB_Pass='.'"'."$D_B_P".'"'.';                                //Database Password ';

    fwrite($handle, $data1."\n\n\n");
    fwrite($handle, $data2."\n\n");
    fwrite($handle, $data3."\n\n");
    fwrite($handle, $data4."\n\n?>");
    fwrite($handle, $data5."\n\n?>");

    echo ("<div class='alert alert-danger' role='alert'>");
    echo ("Create SucseesFully...");
    echo ("</div>");
    sleep(3);

?>