<?php
    $con=mysqli_connect("localhost","root","","databasequery") or die("Server not connected...");

if (isset($_POST['btn']))
{
    $nm=$_POST['name'];
    $fld=$_POST['field'];
    $fldres=$_POST['fieldresult'];
    if ($fld =="name")
    {
        $sel="select * from student where name='$nm'";
    }
    else if ($fld =="address")
    {
        $sel="select * from student where address='$nm'";
    }
    else if ($fld =="class")
    {
        $sel="select * from student where class='$nm'";
    }
    else if ($fld =="section")
    {
        $sel="select * from student where section='$nm'";
    }
    else if($fld =="course")
    {
        $sel="select * from student where course='$nm'";
    }
    $res=mysqli_query($con,$sel);
    while($rr = mysqli_fetch_array($res)) 
    {
        echo $rr[$fldres];
    }
}

?>

<html>
    <head>
    </head>
    <body>
        <form method="POST">

            <label>Name:</label>
            <input type="text" name="name"><br/><br/>

            <label>Which field you are giving?:</label>			
            <select name="field">
            <option selected value="none" >Select</option>
            <option value="name">Name</option>
            <option value="address">Address</option>
            <option value="class">Class</option>
            <option value="section">Section</option>	
            <option value="course">Course</option>            
            </select><br/><br/>

            <label>What to find:</label>			
            <select name="fieldresult">
            <option selected value="none" >Select</option>
            <option value="name">Name</option>
            <option value="address">Address</option>
            <option value="class">Class</option>
            <option value="section">Section</option>	
            <option value="course">Course</option>            
            </select><br/><br/>

            <input type="submit" name="btn" value="Find">
        </form>
    </body>
</html>
