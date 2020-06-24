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
<div align="center">
<?php 

echo " <br><a href=\"http://localhost/railway/insert_into_stations.php\"> Show All Station </a><br> ";
echo " <br><a href=\"http://localhost/railway/insert_into_train_1.php\"> Enter New Train </a><br> ";
echo " <br><a href=\"http://localhost/railway/insert_into_classseats_1.php\"> Enter Train Schedule </a><br> ";
echo " <br><a href=\"http://localhost/railway/booked.php\"> View all booked tickets </a><br> ";
echo " <br><a href=\"http://localhost/railway/cancelled.php\"> View all cancelled tickets </a><br> ";

?>
<br><a href="http://localhost/railway/index.htm">Go to Home Page!!! </a> You'll be Logged Out!!!
</div>
</body>
</html>

