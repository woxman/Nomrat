<?php
$User = @$_POST['User'];
$Email = @$_POST['Mail'];
$Pass = @$_POST['Pass'];
$PPass = @$_POST['PPass'];



// sleep for 2 seconds
sleep(2);

echo "نام شما: $User <br>";
echo "پست الکترونیک شما: $Email <br>";
echo "پسورد: $Pass <br>";
echo "وضعیت تایید پسورد: $PPass <br>";



?>