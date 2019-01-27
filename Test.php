<?php
session_start();
if (isset($_Get['Reset']))
{
    $Reset=isset($_Get['Reset']);
    switch ($Reset)
    {
        case 1:
            Log_Out();
            Redirect_To("Test.php");
    }
}

if(isset($_SESSION['sess_user_id'])) {
    echo '<h1>Welcome '.$_SESSION['sess_name'].'</h1>';
    echo '<h4><a href="?Reset=1">Logout</a></h4>';
} else {
    header('location:Admin.php');
}
?>
