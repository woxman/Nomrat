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
<body  onload="ShowDate();">

<!--------------------------Start Header---------------------------------------->
<div>
    <?php print_r(Clock_Data()); ?>
</div>
    <br><br><br>
<!--------------------------End Header---------------------------------------->
<!--------------------------Start Body---------------------------------------->
<?php

$msg = "";
if(isset($_POST['send'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $password=Get_Hash($password);
    if($username != "" && $password != "") {
        try {
            $query = "select * from `admins` where `user`=:user and `pass`=:pass";
            $stmt = $db->prepare($query);
            $stmt->bindParam('user', $username, PDO::PARAM_STR);
            $stmt->bindValue('pass', $password, PDO::PARAM_STR);
            $stmt->execute();
            $count = $stmt->rowCount();
            $row   = $stmt->fetch(PDO::FETCH_ASSOC);
            if($count == 1 && !empty($row)) {
                /******************** Your code ***********************/
                $_SESSION['sess_user_id']   = $row['id'];
                $_SESSION['sess_username'] = $row['user'];
                $_SESSION['sess_name'] = $row['email'];
                Redirect_To('?Login=True');
            } else {
                $msg = "شناسه و پسورد اشتباه است!";
            }
        } catch (PDOException $e) {
            echo "Error : ".$e->getMessage();
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
        break;
}
#Logout_________________________________________________________________User
        if(isset($_SESSION['sess_user_id']))
        {
            echo '<h1>Welcome '.$_SESSION['sess_name'].'</h1>';
            echo '<a href="?False"><button>Logout</button></a>';
        }
        else
        {
            echo "sdsd";
        }

?>
<!--------------------------End Body---------------------------------------->
<!--------------------------Start Footer---------------------------------------->
    <?php #print_r(Copy_Right());?>
<!--------------------------End Footer---------------------------------------->
</div>
</body>
</html>