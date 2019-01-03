<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>وبگو | ارسال اطلاعات فرم با ای جکس</title>
    <script src="Fr/js/Form_Au.js"></script>
</head>
<body dir="rtl">
<form name="form-name" action="#">
    <label for="name">نام: </label>
    <input id="name" name="name" type="text" size="50" placeholder="نام خود را وارد کنید">
    <br>
    <br>
    <label for="email">پست الکترونیک: </label>
    <input id="email" name="email" type="text" size="50" placeholder="پست الکترونیک خود را وارد کنید">
    <br>
    <br>

    <label for="numbers">عدد :</label>
    <input id="numbers" name="numbers" type="numbers" size="50" placeholder="عدد خود را وارد کنید">
    <br>
    <br>

    <label for="number">انتخاب شماره: </label>
    <select id="number" name="number">
        <option value="1">1</option>
        <option value="2">2</option>
    </select>
    <br>
    <br>
    <label for="check">تایید: </label>
    <input id="check" name="check" type="checkbox" value="1">
    <br>
    <br>
    <input name="send" type="button" value="ارسال" onclick="formGet(this.form, 'process.php');">
</form>
<div id="show-result">
    <?php
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

    ?>
</div>
</body>
</html>