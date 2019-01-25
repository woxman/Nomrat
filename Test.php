<?php
/*
if (Is_Login()) 
{
	#Show Panle
}
elseif (isset($_POST['Email'],$_POST['Pass'])) 
{
	if (Do_Login($_POST['Email'],$_POST['Pass']))
	{
		#True_User_Pass
		#Login_SucsessFully
	}
	else
	{
		#Invalid_User_Pass
		#Login_Faild
	}
}
else
{
	#Show Form
}
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="#" method="post">
	<input type="text" name="u" placeholder="User_Name">
	<input type="password" name="p" placeholder="Password">
	<input type="submit" name="" value="Login">
</form>
</body>
</html>