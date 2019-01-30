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
                Redirect_To('?Login=True');
            } else {
                $msg = "شناسه و پسورد اشتباه است!";
            }
        } catch (PDOException $e) {
            echo "Error : " . $e->getMessage();
        }
    } else {
        $msg = "Both fields are required!";
    }
}

#-------------------------------------------------------------------
#Logout_________________________________________________________________User
switch (isset($_REQUEST['Login'])) {
    case 'True':
        if (isset($_REQUEST['False'])) {
            session_destroy();
            echo("<meta http-equiv=\"refresh\" content=\"0\">");
            header('Refresh: 1; url=Admin.php');

        }
#Logout_________________________________________________________________User
if (isset($_SESSION['sess_user_id'])) {
    echo '<h1>Welcome ' . $_SESSION['sess_name'] . '</h1>';
    echo '<a href="?False"><button>Logout</button></a>';
} else {

    }
        break;
}

?>
<div class="body" dir="rtl" align="center">
    <div class="form bg-light">
        <div class="h_form bg-light"><?php print ($A_T_1)?></div>
        <div class="img_l">
            <img src="Contact/Logo/logo.png" alt="" class="img_l">
        </div>
        <form method="post" action="" class="form-group form_c">
            <div class="">
                <label for="username" class="control-label"><?php echo($A_U_1) ?></label>
                <div class="col-sm-11">
                    <input type="text" class="form-control form_f" id="username"  name="username" required dir="ltr">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="control-label"><?php echo($A_P_1) ?></label>
                <div class="col-sm-11">
                    <input type="password" class="form-control form_f" id="password"  name="password"  required dir="ltr">
                </div>
            </div>
            <div class="form-group btn_f" align="center">
                <div class="col-sm-offset-2 col-sm-5 " >
                    <button type="submit" class="btn btn-primary " id="send" name="send"><?php echo($A_S_1) ?></button>
                </div>
            </div>
            <span class="loginMsg alert-danger alert-link "><?php echo @$msg;?></span>
            <a href="Recover.php"><p><?php echo($A_R_1) ?></p></a>
        </form>
    </div>

<!--------------------------End Body---------------------------------------->
<!--------------------------Start Footer---------------------------------------->
<?php #print_r(Copy_Right());?>
<!--------------------------End Footer---------------------------------------->
</div>
</body>
</html>