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
<body>
<body  onload="ShowDate();">

<!--------------------------Start Header---------------------------------------->
<div>
    <?php print_r(Clock_Data()); ?>
    <div class="header_in" align="center">
        <div class="btn btn-light border"><?php echo ($I_T);?>&nbsp;<i class="fa fa-toolbox" ></i></div>
    </div>
</div>
<div class="btnz">
    <br>
</div>
<!--------------------------End Header---------------------------------------->
<!--------------------------Start Body---------------------------------------->
<div class="body" dir="ltr" align="center">
    <div class="form_in bg-light" align="center" dir="ltr">
        <form method="post" action="" class="form-group form_c" dir="ltr">
            <div class="">
                <label for="inputEmail3" class="control-label"><?php echo($I_U) ?></label>
                <div class="col-sm-11">
                    <input type="email" class="form-control form_f" id="inputEmail3"  name="Email" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="control-label"><?php echo($I_P) ?></label>
                <div class="col-sm-11">
                    <input type="password" class="form-control form_f" id="inputPassword3"  name="Pass"  required>
                </div>
            </div>
            <div class="form-group btn_f" align="center">
                <div class="col-sm-offset-2 col-sm-5 " >
                    <button type="submit" class="btn btn-primary "><?php echo($A_S_1) ?></button>
                </div>
            </div>
        </form>
    </div>
    <!--------------------------End Body---------------------------------------->
    <!--------------------------Start Footer---------------------------------------->
    <?php print_r(Copy_Right());?>
    <!--------------------------End Footer---------------------------------------->
</div>
</body>
</html>