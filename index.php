
<html>
<body><center>
<h1><font face="algerian">vihar tourism</FONT>
</CENTER>"<?php

{
$n=$_POST['uname'];
$s=$_POST['psw'];
$con=new mysqli('localhost','root','sunbeam','mmtech');
$q="select * from login where name='$n' and password='$s'";
$record=$con->query($q);



	 while($row=$record->fetch_assoc())
  {
	if($row['password']==$s)
	echo "hello mr.$n welcome to your dashboard

";

	else 
		echo 'error';
  }

 
$con->close();
}
?>
</body>
</html>
