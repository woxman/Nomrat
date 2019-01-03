<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ورود ادمین</title>

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
    <div class="form bg-light">
        <div class="h_form bg-light"><?php print ($A_T_1)?></div>
        <div class="img_l">
            <img src="Contact/Logo/logo.png" alt="" class="img_l">
        </div>
        <form method="post" action="" class="form-group form_c">
                <div class="">
                    <label for="inputEmail3" class="control-label"><?php echo($A_U_1) ?></label>
                    <div class="col-sm-11">
                        <input type="email" class="form-control form_f" id="inputEmail3"  name="Email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="control-label"><?php echo($A_P_1) ?></label>
                    <div class="col-sm-11">
                        <input type="password" class="form-control form_f" id="inputPassword3"  name="Pass"  required>
                    </div>
                </div>
                <div class="form-group btn_f" align="center">
                    <div class="col-sm-offset-2 col-sm-5 " >
                        <button type="submit" class="btn btn-primary "><?php echo($A_S_1) ?></button>
                    </div>
                </div>
            <a href="Recover.php"><p><?php echo($A_R_1) ?></p></a>
        </form>
    </div>

    <?php
        if ($_POST) {
            echo '<pre>';
            echo htmlspecialchars(print_r($_POST, true));
            echo '</pre>';
        }
    ?>
<!--------------------------End Body---------------------------------------->
<!--------------------------Start Footer---------------------------------------->
    <?php print_r(Copy_Right());?>
<!--------------------------End Footer---------------------------------------->
</div>
</body>
</html>