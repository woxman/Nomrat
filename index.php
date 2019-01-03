<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>اینستالر</title>
    <?php require_once "include.php"?>
</head>
<body  onload="ShowDate();">

<!--------------------------Start Header---------------------------------------->
<div>
    <?php print_r(Clock_Data()); ?>
    <div class="header_in" align="center">
        <div class="btn btn-light border"><?php global $I_T; echo ($I_T);?>&nbsp;<i class="fa fa-toolbox" ></i></div>
    </div>
</div>
<div class="btnz">
    <br>
</div>
<!--------------------------End Header---------------------------------------->
<!--------------------------Start Body---------------------------------------->
<div class="body" dir="rtl" align="center">
    <div align="left" dir="ltr" class="form_in">
        <?php
        $FileName = 'Definitions/Config.php';
        $DB_Name = "nomrat";
        A:
        if (file_exists($FileName))
        {
            $Link_C = new mysqli($DB_Host,$DB_User,$DB_Pass);
            if ($Link_C)
            {
                B:
                if ($Link_C ->select_db($DB_Name))
                {
                    echo "Select Sucsessful";
                    //echo Form 2
                    #Insert Data Form 2 in Admins Table
                    Goto C;


                }else
                {
                    echo "Select Faild";
                    //Create Database And Tables
                    exit(0);
                    Goto B;
                }
            }else
            {
                echo "Error Code : 59 ";;
            }
        }else
        {
            Form_1();
            //if form data connect to phpmyadmin
                #create file config.php
            Goto A;
        }
        C:
        //echo Form 3

        ?>
    </div>
    <!--------------------------End Body---------------------------------------->
    <!--------------------------Start Footer---------------------------------------->
    <?php #print_r(Copy_Right());?>
    <!--------------------------End Footer---------------------------------------->
</div>
</body>
</html>
