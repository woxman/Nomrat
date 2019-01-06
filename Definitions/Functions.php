<?php
function Global_Var()
{
    global $I_T;
    $I_T = "نصب نمرات";
    global $I_U;
    $I_U = "Admin UserName : ";
    global $I_E;
    $I_E = "Email : ";
    global $I_P;
    $I_P = "Password : ";
    global $I_PP;
    $I_PP = "Confirm Password : ";
    global $I_L;
    $I_L = "Logo Site : ";
    global $I_PL;
    $I_PL = "Profle Photo : ";
    global $I_S;
    $I_S = "Install Now";
}
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
#Form____________________2
function form_2(){
    Global_Var();
    global $I_U;
    global $I_E;
    global $I_P;
    global $I_PP;
    global $I_PL;
    global $I_L;
    global $I_S;
    echo("        <form name='form-name' action='#'>");
    echo("            <div class='form-group row'>");
    echo("                <label for='User' class='col-sm-3 col-form-label'>$I_U</label>");
    echo("                <div class='col-sm-3'>");
    echo("                    <input type='text' class='form-control' id='User' name='User' required>");
    echo("                </div>");
    echo("            </div>");
    echo("            <div class='form-group row'>");
    echo("                <label for='Mail' class='col-sm-3 col-form-label'>$I_E</label>");
    echo("                <div class='col-sm-3'>");
    echo("                    <input type='email' class='form-control' id='Mail' name='Mail' required>");
    echo("                </div>");
    echo("            </div>");
    echo("            <div class='form-group row'>");
    echo("                <label for='Pass' class='col-sm-3 col-form-label'>$I_P</label>");
    echo("                <div class='col-sm-3'>");
    echo("                    <input type='password' class='form-control' id='Pass' name='Pass' required>");
    echo("                </div>");
    echo("            </div>");
    echo("            <div class='form-group row'>");
    echo("                <label for='PPass' class='col-sm-3 col-form-label'>$I_PP</label>");
    echo("                <div class='col-sm-3'>");
    echo("                    <input type='password' class='form-control' id='PPass' name='PPass' required>");
    echo("                </div>");
    echo("            </div>");
    echo("            <div class='form-group row'>");
    echo("                <label for='Logo' class='col-sm-3 col-form-label'>$I_L</label>");
    echo("                <div class='col-sm-3'>");
    echo("                    <div class='custom-file'>");
    echo("                        <input type='file' class='custom-file-input ' id='Logo'>");
    echo("                        <label class='custom-file-label' for='Logo'>225*222</label>");
    echo("                    </div>");
    echo("                </div>");
    echo("            </div>");
    echo("            <div class='form-group row'>");
    echo("                <label for='Photo' class='col-sm-3 col-form-label'>$I_PL</label>");
    echo("                <div class='col-sm-3'>");
    echo("                    <div class='custom-file'>");
    echo("                        <input type='file' class='custom-file-input' id='Photo'>");
    echo("                        <label class='custom-file-label' for='Photo'>300*300</label>");
    echo("                    </div>");
    echo("                </div>");
    echo("            </div>");
    echo("            <div class='form-group row ' align='center'>");
    echo("                <div class='col-sm-12'>");
    echo("                    <input name='send' id='send' type='button' value='$I_S' class='btn btn-warning' onclick=\"formGet(this.form, 'process.php');\" > ");
    echo("                </div>");
    echo("            </div>");
    echo("        </form>");
    echo("    </div>");
}
#Form____________________2

function Copy_Right()
{
    echo ("<div class='copy'> Power by : <a href='http://Nomrat.ir' target='_blank'>Nomrat.ir </a><i class='fa fa-copyright'></i>");
}
#Copy____________________Right

?>