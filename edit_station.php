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

if($_POST["station"]==""){ 
echo "
<form action=\"edit_station.php?id=".$_GET["id"]."\" method=\"post\">
Edit Station : <br><br>
<input type=\"text\" name=\"station\" required>
<input type=\"submit\">
</form>
";
}
else{
	$sql = "UPDATE `station` SET `sname`='".$_POST["station"]."' where id= ('".$_GET["id"]."')";
	
	if ($conn->query($sql) === TRUE) {
    	echo "Station updated successfully";
	} else {
	    echo "Error:" . $conn->error;
	}
}

echo "<br> <a href=\"http://localhost/railway/admin_login_1.php\">Go Back to Admin Menu!!!</a> ";

$conn->close();
?>

</body>
</html>



