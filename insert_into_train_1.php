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
<form action="insert_into_train_2.php" method="post">

Train Name: <input type="text" name="tname" required><br>

Starting Point: <select id="sp" name="sp" required>
<?php

require "db.php";

$cdquery="SELECT sname FROM station";
$cdresult=mysqli_query($conn,$cdquery);
        
echo " <option value = \"\" > </option>";

while ($cdrow=mysqli_fetch_array($cdresult)) 
{
 $cdTitle=$cdrow['sname'];
 echo " <option value = \"$cdTitle\" > $cdTitle </option>";
            
}
?>
</select><br>

Starting Time: <input type="time" name="st" required><br>

Destination Point: <select id="dp" name="dp" required>
<?php

require "db.php";

$cdquery="SELECT sname FROM station";
$cdresult=mysqli_query($conn,$cdquery);
        
echo " <option value = \"\" ></option>";

while ($cdrow=mysqli_fetch_array($cdresult)) 
{
 $cdTitle=$cdrow['sname'];
 echo " <option value = \"$cdTitle\" > $cdTitle </option>";
            
}
?>
</select><br>

Destination Time: <input type="time" name="dt" required><br>

Day of Arrival: <input type="text" name="dd" required><br>

<input type="submit">

</body>
</html>


