<html>
<body>
<?php
	$con = mysql_connect("localhost","root","mithrandir5123") or die(mysql_error());

	mysql_select_db("Isro") or die(mysql_error());


$sql="INSERT INTO users (username,password,EmployeeID,role,departmentid,projectcategoryid)   VALUES ('$_POST[user]', '$_POST[password]', '$_POST[eid]','$_POST[role]','$_POST[deptid]','$_POST[projectcategory]')";

	if (!mysql_query($sql,$con))
	{	die('Error: ' . mysql_error());
	}
	echo "1 record added";
	mysql_close($con);
	include("admindisp.php");

?>

 	</body>
</html> 

