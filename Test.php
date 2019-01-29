<?php
session_start();
if (isset($_REQUEST['True']))
{
    session_destroy();
    echo("<meta http-equiv=\"refresh\" content=\"0\">");
    header('Refresh: 1; url=Test.php');

}
if(isset($_SESSION['sess_user_id']))
{
    echo '<h1>Welcome '.$_SESSION['sess_name'].'</h1>';
    echo '<a href="?True"><button>Logout</button></a>';
} else {
    header('location:Admin.php');
}
?>
