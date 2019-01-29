<link rel="stylesheet" href="Fr/Css/Bootstrap.min.css">
<link rel="stylesheet" href="Fr/Css/All.css">
<script src="Fr/Js/All.min.js"></script>
<script src="Fr/Js/Jquery.min.js"></script>
<script src="Fr/Js/Time_Date/Script.js"></script>
<?php
require_once "Fr/Js/Time_Date/Jdf.php";
require_once "Definitions/Amounts.php";
require_once "Definitions/Functions.php";
if (file_exists('Definitions/Config.php')) {
    include_once "Definitions/Config.php";
}

?>
<script src="Fr/Js/Api-Clock.js"></script>
<script src="http://api.open-notify.org/iss-pass.json?lat=1&lon=1&callback=setUTS"></script>
<link rel="stylesheet" href="Theme/default/Style.css">
