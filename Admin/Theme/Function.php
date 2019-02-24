<?php

function Clock_Data_2()
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
    echo ("<button class='btn btn-sm dropdown-toggle btn-light border' type='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>");
    echo($_SESSION['s_user']);
    echo("  </button>");
    echo("    <div class='dropdown-menu'>");
    echo ("        <a href='?False' class='dropdown-item sm'>خروج <i class='fal fa-power-off  ' style='font-size: 17px; color: darkred;'></i></a>");
    echo("    </div>");
    echo ("</div>");
}
function Panel_A()
{
    echo("  <nav class='menu' tabindex='0'>");
    echo("	<div class='smartphone-menu-trigger'></div>");
    echo("  <header class='avatar'>");
    $Profile_I=$_SESSION['s_photo'];
    echo("		<img src='$Profile_I' /><br><br>");
    echo '<p>Welcome ' . $_SESSION['s_email'] . '</p>';
    echo("  </header>");
    echo("	<ul>");
    echo("    <a href='?Dashboard'><div class='P_I'><i class=\"fal fa-tachometer-alt \" style='font-size: 24px; color: whitesmoke;'></i><span>&nbsp;Dashboard</span></div></a>");
    echo("    <a href='?Admin'><div class='P_I'><i class=\"fal fa-user-cog \" style='font-size: 24px; color: whitesmoke;'></i><span>&nbsp;Admins</span></div></a>");
    echo("    <a href='?Teachers'><div class='P_I'><i class=\"fal fa-user-tie \" style='font-size: 24px; color: whitesmoke;'></i><span>&nbsp;&nbsp;Teachers</span></div></a>");
    echo("    <a href='?Students'><div class='P_I'><i class=\"fal fa-user-graduate \" style='font-size: 24px; color: whitesmoke;'></i><span>&nbsp;&nbsp;Studenst</span></div></a>");

    echo("  </ul>");
    echo("</nav>");
    echo("<main>");
    echo("  <div class='helper'>");
    if (isset($_REQUEST['Dashboard']))
    {
        echo ("1");
    }elseif (isset($_REQUEST['Admin']))
    {
        echo ("2");
    }elseif (isset($_REQUEST['Teachers']))
    {
        echo ("3");
    }elseif (isset($_REQUEST['Students']))
    {
        echo ("4");
    }else
    {
        echo ("1");
    }
    echo("  </div>");
    echo("</main>");
}

?>