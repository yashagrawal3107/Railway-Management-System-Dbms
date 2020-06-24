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
<form action="insert_into_classseats_2.php" method="post">

Trains: <select id="tno" name="tno" required>
<?php

require "db.php";

$query="SELECT * FROM train";
$result=mysqli_query($conn,$query);

echo " <option value = \"\" > </option>";

while ($row=mysqli_fetch_array($result)) 
{
 $tno=$row['trainno'];
 $tn=$row['tname']." starting at ".$row['sp'];
 echo " <option value = \"$tno\" > $tn </option> ";
}
?>
</select><br>

Date Of Journey: <input type="date" name="doj" required><br>
Class Name: <input type="text" name="class" required><br>
Fare per Seat: <input type="text" name="fps" required><br>
Total Seats: <input type="text" name="seatsleft" required><br>

<br><br><input type="submit" value="Add Train Schedule">

</body>
</html>


