<?php  
if (isset($_POST['btn']))
{
    $count = 0;  
    $num = 2;  
    while ($count < 70 )  
    {  
        $div_count=0;  
        for ( $i=1; $i<=$num; $i++)  
        {  
            if (($num%$i)==0)  
            {  
                $div_count++;  
            }  
        }  
        if ($div_count<3)  
        {  
            echo $num." , ";  
            $count=$count+1;  
        }  
        $num=$num+1;  
    }
}


if (isset($_POST['factbtn']))
{
    $num = 100;  
    $factorial = 1;  
    for ($x=$num; $x>=1; $x--)   
    {  
    $factorial = $factorial * $x;  
    }  
    echo "Factorial of $num is $factorial";  
}

?>  

<form method="POST">
    <input type="submit" name="btn" value="Prime Numbers">
    <input type="submit" name="factbtn" value="Factorial">
</form>

