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
</div>
<!--------------------------End Header---------------------------------------->
<!--------------------------Start Body---------------------------------------->
<div class="body" dir="ltr" align="center">

        <!--------------------------End Body---------------------------------------->
        <!--------------------------Start Footer---------------------------------------->
        <?php #print_r(Copy_Right());?>
        <!--------------------------End Footer---------------------------------------->
</body>
</html>
