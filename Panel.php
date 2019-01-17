<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>پنل ورود</title>
    <?php require_once "Include.php"?>
</head>
<body  onload="ShowDate();">
<div class="container-fluid">
    <div class="container">
        <!--------------------------Start Header---------------------------------------->
        <div class="col-md-2">
            <?php print_r(Clock_Data()); ?>
        </div>

        <!--------------------------End Header---------------------------------------->
        <!--------------------------Start Body---------------------------------------->
        <div dir="rtl" align="center">
                <div id="formm_2" class="w-75">
                    <div class="col-md-12 col-sm-auto">
                        <div class="header_in" align="center">
                            <div class="btn btn-light border"><?php Global_Var(); global $P_L; echo ($P_L);?>&nbsp;<i class="fa fa-person-sign" ></i></div>
                        </div>
                    </div>
                    <img src="Contact/Logo/logo.png" alt="">
                    <hr>
                    <P style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus molestias, sint. Aliquam assumenda, blanditiis consectetur enim eos ex
                        harum modi, molestias nesciunt nulla officia quos repellat tempore veniam voluptatem. Tempora!</P>

                    <br><br><br><br>
                    <a href="Teacher.php"><button class="btn btn-success col-md-6 col-xs-3 P_L "><?php echo ("ورود ".$A_T_3."&nbsp; <i class=\"fa fa-chalkboard-teacher\" ></i>")?></button></a>
                    <a href="Student.php"><button class="btn btn-warning col-md-6 col-xs-3 P_L"><?php echo ("ورود ".$A_T_2."&nbsp; <i class=\"fa fa-user-graduate\" ></i>")?></button></a>
                 </div>
         </div>
        <!--------------------------End Body---------------------------------------->
        <!--------------------------Start Footer---------------------------------------->
                <?php #print_r(Copy_Right());?>
         <!--------------------------End Footer---------------------------------------->
    </div>
</div>
</body>
</html>
