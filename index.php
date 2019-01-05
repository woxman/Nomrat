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
        <noscript>
            جاوا اسکریپت در مرورگر شما غیر فعال است!
            <br>
        </noscript>
        <?php /*
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
        */
        ?>
        <form name="form-name" action="#">
            <div class="form-group row">
                <label for="User" class="col-sm-3 col-form-label"><?php echo ($I_U)?></label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="User" name="User" >
                </div>
            </div>
            <div class="form-group row">
                <label for="Mail" class="col-sm-3 col-form-label"><?php echo ($I_E)?></label>
                <div class="col-sm-3">
                    <input type="email" class="form-control" id="Mail" name="Mail">
                </div>
            </div>
            <div class="form-group row">
                <label for="Pass" class="col-sm-3 col-form-label"><?php echo ($I_P)?></label>
                <div class="col-sm-3">
                    <input type="password" class="form-control" id="Pass" name="Pass">
                </div>
            </div>
            <div class="form-group row">
                <label for="PPass" class="col-sm-3 col-form-label"><?php echo ($I_PP)?></label>
                <div class="col-sm-3">
                    <input type="password" class="form-control" id="PPass" name="PPass">
                </div>
            </div>
            <div class="form-group row">
                <label for="Logo" class="col-sm-3 col-form-label"><?php echo ($I_L)?></label>
                <div class="col-sm-3">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input " id="Logo">
                        <label class="custom-file-label" for="Logo">225*222</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="Photo" class="col-sm-3 col-form-label"><?php echo ($I_PL)?></label>
                <div class="col-sm-3">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="Photo">
                        <label class="custom-file-label" for="Photo">300*300</label>
                    </div>
                </div>
            </div>

            <label for="check">تایید: </label>
            <input id="check" name="check" type="checkbox" value="1">
            <br>
            <div class="form-group row " align="center">
                <div class="col-sm-12">
                    <input name="send" id="send" type="button" value="<?php echo ($I_S )?>" class="btn btn-warning"  onclick="formGet(this.form, 'process.php');">
                </div>
            </div>
        </form>
    </div>
    <div id="show-result">
    </div>
    <!--------------------------End Body---------------------------------------->
    <!--------------------------Start Footer---------------------------------------->
    <?php #print_r(Copy_Right());?>
    <!--------------------------End Footer---------------------------------------->
</div>
</body>
</html>
