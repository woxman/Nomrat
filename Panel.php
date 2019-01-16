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
<!--------------------------Start Header---------------------------------------->
<div>
    <?php print_r(Clock_Data()); ?>
    <div class="header_in" align="center">
        <div class="btn btn-light border"><?php Global_Var(); global $P_L; echo ($P_L);?>&nbsp;<i class="fa fa-person-sign" ></i></div>
    </div>
</div>
<!--------------------------End Header---------------------------------------->
<!--------------------------Start Body---------------------------------------->
<div class="body" dir="rtl" align="center" >
    <div id="formm_2">
        <a href="x.com"><div class="P_T col-md-6" align="left"><button type="button" class="btn btn-primary btn-lg "><?php echo ("ورود ".$A_T_2);?></button></div></a>
        <a href="x.com"><div class="P_S col-md-6" ><button type="button" class="btn btn-secondary btn-lg "><?php echo ("ورود ".$A_T_3."-اساتید");?></button></div></a>
    </div>
</div>
<!--------------------------End Body---------------------------------------->
<!--------------------------Start Footer---------------------------------------->
        <?php #print_r(Copy_Right());?>
 <!--------------------------End Footer---------------------------------------->
</body>
</html>
