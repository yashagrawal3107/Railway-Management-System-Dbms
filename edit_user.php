<html>
<head>
    <title>RAILWAY RESERVATION SYSTEM</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
</head>

<body class=home>
    <div id="container">

        <nav class="navbar navbar-expand-lg navbar-dark bg-black">

            <a class="navbar-brand" id="n">Railway Management System</a>

        </nav>
    </div>


<?php
require "db.php";

if($_POST["emailid"]==""){ 

$cdquery="SELECT * FROM user WHERE id='".$_GET["id"]."'";
$cdresult=mysqli_query($conn,$cdquery);
$cdrow=mysqli_fetch_array($cdresult);

echo "
<table>
<thead><td>Id</td><td>Email_Id</td><td>Password</td><td>Mobile_no</td><td>Date_Of_Birth</td></thead>
";
echo "
<tr><td>".$cdrow["id"]."</td>
<form action=\"edit_user.php?id=".$_GET["id"]."\" method=\"post\">
<td><input type=\"text\" name=\"emailid\" value=\"".$cdrow["emailid"]."\" required></td>
<td><input type=\"text\" name=\"password\" value=\"".$cdrow["password"]."\" required></td>
<td><input type=\"text\" name=\"mobileno\" value=\"".$cdrow["mobileno"]."\" required></td>
<td><input type=\"date\" name=\"dob\" value=\"".$cdrow["dob"]."\" required></td></tr>
";
echo "</table><input value='Update Record' type=\"submit\"></form>";
}
else{
	$sql = "UPDATE `user` SET `emailid`='".$_POST["emailid"]."',`password`='".$_POST["password"]."',`mobileno`='".$_POST["mobileno"]."',`dob`='".$_POST["dob"]."' WHERE id='".$_GET["id"]."'";
	
	if ($conn->query($sql) === TRUE) {
    	echo "User details updated successfully";
	} else {
	    echo "Error:" . $conn->error;
	}
}

echo " <br><br><a href=\"http://localhost/railway/show_users.php\">Go Back to User Menu!!!</a><br> ";
echo " <br><a href=\"http://localhost/railway/admin_login_1.php\">Go Back to Admin Menu!!!</a> ";

$conn->close();
?>


</body>
</html>


