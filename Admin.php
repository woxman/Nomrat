<?php
session_start();
require_once "Include.php";
require_once "Definitions/Con_DB.php";
require_once "Admin/Theme/Function.php"
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ورود ادمین</title>
    <link rel="stylesheet" href="Fr/Css/Style.css">
    <link rel="stylesheet" href="Fr/Js/Chart.min.js">
    <script src="Fr/Js/Bootstrap.min.js"></script>
</head>
<body onload="ShowDate();">

<!--------------------------Start Header---------------------------------------->
<div>
    <?php
    if (isset($_SESSION['s_email']))
    {
        print_r(Clock_Data_2());
    }else
    {
        print_r(Clock_Data());
    }
    ?>
</div>
<br><br><br>
<!--------------------------End Header---------------------------------------->
<!--------------------------Start Body---------------------------------------->
<?php
#Check______True_______UserName____Password
$msg = "";
if (isset($_POST['send'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $Captcha = trim(isset($_POST['Captcha']));
    $Captcha_A = trim(isset($_POST['Captcha_A']));
    $password = Get_Hash($password);
    echo ($Captcha."<br>");
    echo ($Captcha_A."<br>");
    if ($username != "" && $password != "") {
        try {
            $query = "select * from `admins` where `user`=:user and `pass`=:pass";
            $stmt = $db->prepare($query);
            $stmt->bindParam('user', $username, PDO::PARAM_STR);
            $stmt->bindValue('pass', $password, PDO::PARAM_STR);
            $stmt->execute();
            $count = $stmt->rowCount();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($count == 1 && !empty($row)) {
                /******************** Your code ***********************/
                if ($Captcha==$Captcha_A)
                {
                    $_SESSION['s_id'] = $row['id'];
                    $_SESSION['s_user'] = $row['user'];
                    $_SESSION['s_email'] = $row['email'];
                    $_SESSION['s_photo'] = $row['photo'];
                    Redirect_To('Admin.php');
                }
            } else {
                $msg = "فیلد های ورودی نادرست است";
                if (isset($_SESSION['Invalid_Log'])) {
                    $_SESSION['Invalid_Log'] = $_SESSION['Invalid_Log'] + 1;
                } else {
                    $_SESSION['Invalid_Log'] = 1;
                }

            }
        } catch (PDOException $e) {
            echo "Error : " . $e->getMessage();
        }
    } else {
        $msg = "حتما باید فیلدها دارای مقدار باشند";
    }
}
#Check______True_______UserName____Password
#Logout_________________________________________________________________User
if (isset($_REQUEST['False'])) {
    session_destroy();
    redirect("Admin.php");

}
#Logout_________________________________________________________________User


#-------------------------------------------------------------------
if (isset($_SESSION['s_id'])) {
    Panel_A();
} else {
    echo("<div class='body' dir='rtl' align='center'>");
    echo("    <div class='form bg-light'>");
    echo("        <div class='h_form bg-light'>$A_T_1</div>");
    echo("        <div class='img_l'>");
    echo("            <img src='Contact/Logo/logo.png' alt='' class='img_l'>");
    echo("        </div>");
    echo("        <form method='post' action='' class='form-group form_c'>");
    echo("            <div class=''>");
    echo("                <label for='username' class='control-label'>$A_U_1</label>");
    echo("                <div class='col-sm-11'>");
    echo("                    <input type='text' class='form-control form_f' id='username'  name='username' required dir='ltr'>");
    echo("                </div>");
    echo("            </div>");
    echo("            <div class='form-group'>");
    echo("                <label for='password' class='control-label'>$A_P_1</label>");
    echo("                <div class='col-sm-11'>");
    echo("                    <input type='password' class='form-control form_f' id='password'  name='password'  required dir='ltr'>");
    echo("                </div>");
    echo("            </div>");
    if (isset($_SESSION['Invalid_Log']))
    {
        if ($_SESSION['Invalid_Log'] >= 3)
        {
            $r1 = rand(1, 9);
            $r2 = rand(1, 9);
            $arrX = array("+", "*");
            $randIndex = array_rand($arrX);
            $r3 = $arrX[$randIndex];
            $w = ($r1 . " " . $arrX[$randIndex] . " " . $r2 );
            $result=0;
            switch($r3)
            {
                case "*":
                    $a = $r1 * $r2;
                    break;

                case "+";
                    $a = $r1 + $r2;
                    break;

            }
            echo("                <label for='Captcha' class='col-sm-12 col-form-label text-primary'>لطفا جواب صحیح را وارد کنید($w)</label>");
            echo("            <div class='form-group'>");
            echo("                <div class='col-sm-11'>");
            echo("                    <input type='text' class='form-control form_f' id='Captcha'  name='Captcha'  required dir='ltr'>");
            echo("                    <input type='hidden' class='form-control form_f' id='Captcha_A'  name='Captcha_A'  required dir='ltr' value='$a'>");
            echo("                </div>");
            echo("            </div>");

        }
    }
    echo("            <div class='form-group btn_f' align='center'>");
    echo("                <div class='col-sm-offset-2 col-sm-5 ' >");
    echo("                    <button type='submit' class='btn btn-primary ' id='send' name='send'>$A_S_1</button>");
    echo("                </div>");
    echo("            </div>");
    echo("            <span class='loginMsg alert-danger alert-link '>$msg</span>");
    echo("            <a href='Recover.php'><p>$A_R_1</p></a>");
    echo("        </form>");
    echo("    </div>");
}


?>
<!--------------------------End Body---------------------------------------->
<!--------------------------Start Footer---------------------------------------->
<?php #print_r(Copy_Right());?>
<!--------------------------End Footer---------------------------------------->
</div>
</body>
</html>