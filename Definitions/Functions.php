<?php
#Change_______________DatabaseName;
function Over_Write()
{
    global $DB_Name;
    $fname = "Definitions/DB&TB_Creater.sql";
    $fhandle = fopen($fname,"r");
    $content = fread($fhandle,filesize($fname));
    $content = str_replace("Nomrat", "$DB_Name", $content);

    $fhandle = fopen($fname,"w");
    fwrite($fhandle,$content);
    fclose($fhandle);

}
#Change_______________DatabaseName;
#Create_______________Database&Tables..;
function Import_DB()
{
    // Name of the file
    $filename = 'Definitions/DB&TB_Creater.sql';
    global $Link_C;
// Temporary variable, used to store current query
    $templine = '';
// Read in entire file
    $lines = file($filename);
// Loop through each line
    foreach ($lines as $line) {
// Skip it if it's a comment
        if (substr($line, 0, 2) == '--' || $line == '')
            continue;

// Add this line to the current segment
        $templine .= $line;
// If it has a semicolon at the end, it's the end of the query
        if (substr(trim($line), -1, 1) == ';') {
            // Perform the query
            $Link_C->query($templine) or print('Error performing query \'<strong>' . $templine . '\': ' . $Link_C->error() . '<br /><br />');
            // Reset temp variable to empty
            $templine = '';
        }
    }
}
#Create_______________Database&Tables..;
#Global_______________Varibles;
function Global_Var()
{
    global $P_L;
    $P_L = "پنل ورود";
    global $P;
    $P="پنل";
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
    global $I_AR;
    $I_AR = "Are you sure of the information you entered ? ";
    $I_S = "Install Now";
    global $D_H;
    $D_H = "Host : ";
    global $D_N;
    $D_N = "Database Name : ";
    global $D_U;
    $D_U = "Database User : ";
    global $D_P;
    $D_P = "Database Password : ";
    global $D_T;
    $D_T = "Test";
    global $D_C;
    $D_C = "Connect";
}
#Global_______________Varibles;
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
#Form____________________1
function Form_1()
{
    Global_Var();
    global $D_H;
    global $D_N;
    global $D_U;
    global $D_P;
    global $D_C;
    global $D_T;
    global $I_AR;
    echo("<image src='Contact/1.jpg' style='float: right;margin-right: 20px;opacity: 0.25;' class='hidden-xs'>");
    echo("        <form name='form-name' action='#'>");
    echo("            <div class='form-group row'>");
    echo("                <label for='User_H' class='col-sm-5 col-form-label'>$D_H</label>");
    echo("                <div class='col-sm-5'>");
    echo("                    <input type='text' class='form-control' id='User_H' name='User_H' value='localhost' required>");
    echo("                </div>");
    echo("            </div>");
    echo("<br>");
    echo("            <div class='form-group row'>");
    echo("                <label for='Name_D' class='col-sm-5 col-form-label'>$D_N</label>");
    echo("                <div class='col-sm-5'>");
    echo("                    <input type='text' class='form-control' id='Name_D' name='Name_D' required>");
    echo("                </div>");
    echo("            </div>");
    echo("<br>");
    echo("            <div class='form-group row'>");
    echo("                <label for='User_D' class='col-sm-5 col-form-label'>$D_U</label>");
    echo("                <div class='col-sm-5'>");
    echo("                    <input type='texts' class='form-control' id='User_D' name='User_D' required>");
    echo("                </div>");
    echo("            </div>");
    echo("<br>");
    echo("            <div class='form-group row'>");
    echo("                <label for='Pass_D' class='col-sm-5 col-form-label'>$D_P</label>");
    echo("                <div class='col-sm-5'>");
    echo("                    <input type='password' class='form-control' id='Pass_D' name='Pass_D' required>");
    echo("                </div>");
    echo("            </div>");
    echo("<br>");
    echo("  <div class='form-group form-check'>");
    echo("    <input type='checkbox' class='form-check-input' id='exampleCheck1' name='exampleCheck1' checked required>");
    echo("    <label class='form-check-label' for='exampleCheck1'>$I_AR</label>");
    echo("  </div>");
    echo("<br>");
    echo("<br>");
    echo("            <div class='form-group row ' align='right'>");
    echo("                <div class='col-sm-12'>");
    echo("                    <input name='sendNewSms' id='sendNewSms' type='button' value='$D_C' class='btn btn-warning' onclick=\"formGet(this.form, 'Process_1.php');\" > ");
    echo("                </div>");
    echo("            </div>");
    echo("        </form>");
    echo("    </div>");

}
#Form____________________1
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
    global $I_AR;

    echo("<image src='Contact/1.jpg' style='float: right;margin-right: 20px;opacity: 0.25;' class='hidden-xs'>");
    echo("        <form name='form-name' action='#'>");
    echo("            <div class='form-group row'>");
    echo("                <label for='User' class='col-sm-5 col-form-label'>$I_U</label>");
    echo("                <div class='col-sm-5'>");
    echo("                    <input type='text' class='form-control' id='User' name='User' required>");
    echo("                </div>");
    echo("            </div>");
    echo("<br>");
    echo("            <div class='form-group row'>");
    echo("                <label for='Mail' class='col-sm-5 col-form-label'>$I_E</label>");
    echo("                <div class='col-sm-5'>");
    echo("                    <input type='email' class='form-control' id='Mail' name='Mail' required>");
    echo("                </div>");
    echo("            </div>");
    echo("<br>");
    echo("            <div class='form-group row'>");
    echo("                <label for='Pass' class='col-sm-5 col-form-label'>$I_P</label>");
    echo("                <div class='col-sm-5'>");
    echo("                    <input type='password' class='form-control' id='Pass' name='Pass' required>");
    echo("                </div>");
    echo("            </div>");
    echo("<br>");
    echo("            <div class='form-group row'>");
    echo("                <label for='PPass' class='col-sm-5 col-form-label'>$I_PP</label>");
    echo("                <div class='col-sm-5'>");
    echo("                    <input type='password' class='form-control' id='PPass' name='PPass' required>");
    echo("                </div>");
    echo("            </div>");
    echo("                    <input type='hidden' class='form-control' id='Hidden' name='Hidden' value='1' required>");
    echo("<br>");
    echo("<br>");
    echo("<br>");
    echo("            <div class='form-group row ' align='right'>");
    echo("                <div class='col-sm-12'>");
    echo("                    <input name='send' id='send' type='button' value='$I_S' class='btn btn-warning' onclick=\"formGet(this.form, 'Process_2.php');\" > ");
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
#Progres____________________Bar]
function Progres_Bar()
{
    echo("<link rel='stylesheet' type='text/css' href='../Fr/Css/grasp_mobile_progress_circle-1.0.0.css'>");
    echo("<script src='../Fr/Js/grasp_mobile_progress_circle-1.0.0.js'></script>");
    echo("<script src='../Fr/Js/script.js'></script>");
    echo("<div id='progress-circle'></div>");

}
#Progres____________________Bar

?>