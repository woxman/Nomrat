<?php
$name = @$_POST['name'];
$email = @$_POST['email'];
$numbers = @$_POST['numbers'];
$check = @$_POST['check'];
$number=@$_POST['number'];

// sleep for 2 seconds
sleep(2);

echo "نام شما: $name <br>";
echo "پست الکترونیک شما: $email <br>";
echo "عدد: $numbers <br>";
echo "شماره انتخاب شده: $number <br>";
echo "وضعیت تایید: $check <br>";
?>