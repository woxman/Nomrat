<?php
$Salt="Hekta";
//Form_________2
include ("Definitions/Config.php");
$Link_C = new mysqli($DB_Host,$DB_User,$DB_Pass,$DB_Name);
$User_A =@$_POST['User'];
$Email_A =@$_POST['Mail'];
$Pass_A =@$_POST['Pass'];
$PPass_A =@$_POST['PPass'];
$Photo_A = "Profile/Admin.png";
global $Nexted;
$Nexted=@$_POST['Hidden'];
//Form_________2
if (is_numeric($User_A))
{
    echo ("<div class='alert alert-warning' role='alert'>");
    echo ("نام کاربری نادرست است");
    echo ("</div>");
    exit(0);
}
if(!mb_eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $Email_A) and $Pass_A != $PPass_A){
{
    echo ("<div class='alert alert-warning' role='alert'>");
    echo ("ایمیل  نادرست و گذرواژه متناقض است");
    echo ("</div>");}
    exit(0);
}else if(!mb_eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $Email_A))
{
    echo ("<div class='alert alert-warning' role='alert'>");
    echo ("یک ایمیل صحیح وارد کنید");
    echo ("</div>");
    exit(0);
}else if($Pass_A != $PPass_A)
{
    echo ("<div class='alert alert-warning' role='alert'>");
    echo ("گذرواژه ها یکسان نیست");
    echo ("</div>");
    exit(0);
}
$Hash_Pass = hash('sha256',$Salt.$Pass_A);

// sleep for 2 seconds
sleep(2);

$sql = "insert into admins values (\"0\",\"$User_A\",\"$Email_A\",\"$Hash_Pass\",\"$Photo_A\")";
$Link_C->query($sql);

    echo ("<div class='alert alert-success' role='alert'>");
    echo ("....عملیات موفق");
    echo ("</div>");


sleep(6);
echo("<meta http-equiv=\"refresh\" content=\"0\">");
header('Refresh: 1; url=index.php');
sleep(3);
mysqli_close($Link_C);
?>




