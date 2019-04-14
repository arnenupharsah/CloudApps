<?php
$con=mysqli_connect("localhost","root","","databasequery") or die("Server not connected...");

if (isset($_POST['btn']))
{
    for ($i = 10002; $i <= 50000; $i++) 
    {
        $nm="name".(string)$i;
        $adr="address".(string)$i;
        $cls="class".(string)$i;
        $sec="section".(string)$i;
        $crs="course".(string)$i;

        $ins="insert into student(name,address,class,section,course)values('$nm','$adr','$cls','$sec','$crs')";

        if(mysqli_query($con,$ins))
        {
        header("location:index1.php");
        }
        else
        {
        echo mysqli_error();
        }
    }
}

?>
<html>
<html>
<head>

</head>
<body>
<form method="POST">
    <input type="submit" name="btn" value="insert">
</form>
</body>
</html>