<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ریست پسورد</title>

    <?php require_once "include.php"; ?>
</head>
<body  onload="ShowDate();">
<!--------------------------Start Header---------------------------------------->
<div>
    <?php print_r(Clock_Data()); ?>
</div>
<br><br><br>
<!--------------------------End Header---------------------------------------->
<!--------------------------Start Body---------------------------------------->
<div class="body" dir="rtl" align="center">
    <div class="form bg-light " align="center">
        <div class="h_form bg-light form_c"><?php print ($A_T_4)?></div>
        <div class="img_l">
            <img src="Contact/Logo/logo.png" alt="" class="img_l">
        </div>
        <p class="m_z_l "><?php echo ($A_M_4); ?></p>
        <form action="test.php" class="form-group form_c">
            <div class="form-group">
                <label for="inputPassword3" class="control-label"><?php echo("$A_E_4") ?></label>
                <div class="col-sm-11">
                    <input type="email" class="form-control form_f" id="inputPassword3" >
                </div>
            </div>
            <div class="form-group " align="right">
                <div class="col-sm-offset-2 col-sm-13 " >
                    <button type="submit" class="btn btn-primary "><?php echo($A_S_4) ?></button>
                </div>
            </div>
        </form>
    </div>
<!--------------------------Start Footer---------------------------------------->
    <?php print_r(Copy_Right());?>
<!--------------------------End Footer---------------------------------------->
</div>
</body>
</html>