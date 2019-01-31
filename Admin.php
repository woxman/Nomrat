<?php
session_start();
require_once "Include.php";
require_once "Definitions/Con_DB.php";
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
</head>
<body onload="ShowDate();">

<!--------------------------Start Header---------------------------------------->
<div>
    <?php print_r(Clock_Data()); ?>
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
    $password = Get_Hash($password);
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
                $_SESSION['sess_user_id'] = $row['id'];
                $_SESSION['sess_username'] = $row['user'];
                $_SESSION['sess_name'] = $row['email'];
                Redirect_To('Admin.php');
            } else {
                $msg = "شناسه و پسورد اشتباه است!";
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
        $msg = "Both fields are required!";
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
if (isset($_SESSION['sess_user_id'])) {
    echo("  <nav class='menu' tabindex='0'>");
    echo("	<div class='smartphone-menu-trigger'></div>");
    echo("  <header class='avatar'>");
    echo("		<img src='https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg' />");
    echo '<h6>Welcome ' . $_SESSION['sess_name'] . '</h6>';
    echo("  </header>");
    echo("	<ul>");
    echo("    <li tabindex='0' class='icon-dashboard'><span>Dashboard</span></li>");
    echo("    <li tabindex='0' class='icon-customers'><span>Customers</span></li>");
    echo("    <li tabindex='0' class='icon-users'><span>Users</span></li>");
    echo("    <li tabindex='0' class='icon-settings'><span>Settings</span></li>");
    echo("  </ul>");
    echo("</nav>");
    echo("<main>");
    echo("  <div class='helper'>");
    echo("    RESIZE THE WINDOW");
    echo("		<span>Breakpoints on 900px and 400px</span>");
    echo '<a href="?False"><button>Logout</button></a>';
    echo("  </div>");
    echo("</main>");
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
    if (isset($_SESSION['Invalid_Log'])) {
        if ($_SESSION['Invalid_Log'] > 6) {
            $r1 = rand(1, 9);
            $r2 = rand(1, 9);
            $arrX = array("+", "*");
            $randIndex = array_rand($arrX);
            $r3 = $arrX[$randIndex];
            $w = ($r1 . " " . $arrX[$randIndex] . " " . $r2 . " = <br>");
            $a = (int)((int)$r1.$r3.(int)$r2);
        }
    }
    echo("            <div class='form-group row'>");
    echo("                <label for='Captcha' class='col-sm-5 col-form-label'>$w $a</label>");
    echo("                <div class='col-sm-5'>");
    echo("                    <input type='text' class='form-control' id='Captcha' name='Captcha' required>");
    echo("                </div>");
    echo("            </div>");

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