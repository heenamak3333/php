<html>
<head></head>
<body>
    <form method="Post">
        <P>Physics:<input type="number" name="s1"><br></p>
        <p>Chemistry: <input type="number" name="s2"><br></p>
        <p>Biology:<input type="number" name="s3"><br></p>
        <p>Mathematics :<input type="number" name="s4"><br></p>
        <p>Computer<input type="number" name="s5"><br></p>
        <input type="submit" name="submit" value="click">
</form>    
</body>
</html>

<?php
 if(isset($_POST['submit']))
 {
    $a=$_POST['s1'];
    $b=$_POST['s2'];
    $c=$_POST['s3']; 
    $d=$_POST['s4']; 
    $e=$_POST['s5']; 

    $f=$a+$b+$c+$d+$e;
    echo "Total = $f <br>";

    $g=$f*100/500;
    echo "percentage= $g <br>";


    if($g>70)
    {
        echo"garde is distiction";
    }
    elseif($g>60){
        echo"grade is first class";
    }
    elseif($g>50)
    {
        echo"grade is second class";
    }
    elseif($g>=40)
    {
        echo"grade is pass class";
    }
    else{
        echo "Fail";
    }
 }

?>