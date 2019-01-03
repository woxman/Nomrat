<?php
#Rime_______________Zone;
date_default_timezone_set("Asia/Tehran");
#Rime_______________Zone;
#Redirect_______________Page;
function redirect($url)
{
    if (!headers_sent()){
        header('Location: '.$url); exit;
    }else{
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>'; exit;
    }
}
#Redirect________________Page;
#Clock___________________Time;
function Clock_Data()
{
    echo ("<div class='header btn-group' align='right'>");
    echo ("<div class='btn btn-light'>");
    echo ("&nbsp; &nbsp; <i class=' fa fa-calendar-alt ' ></i>");
    echo ("<div style='float: left'>");
    echo (jdate(" Y , m , d , l"));
    echo ("</div>");
    echo ("</div>");
    echo ("<div class=' btn btn-light border'>");
    echo ("&nbsp;&nbsp;&nbsp;&nbsp;<i class=' fa fa-clock ' ></i><div id='time' style=' float: left'></div>");
    echo ("</div>");
    echo ("<div class='btn btn-light border '>");
    echo ("<i class='fa fa-home far-red-river '></i>");
    echo ("</div>");
    echo ("</div>");
}
#Clock___________________Time;
#Copy____________________Right
function Copy_Right()
{
    echo ("<div class='copy'> Power by : <a href='http://Nomrat.ir' target='_blank'>Nomrat.ir </a><i class='fa fa-copyright'></i>");
}
#Copy____________________Right
$I_T = "نصب نمرات";
$I_U = "Admin UserName : ";
$I_E = "Email : ";
$I_P = "Password : ";
$I_PP= "Confirm Password : ";
$I_L = "Logo Site : ";
$I_PL= "Profle Photo : ";
$I_S = "Install Now";
?>