<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grading</title>
</head>
<body>
<?php
function exam ($y)
{
    if($y>=70 && $y<100)
    {
        echo "Grade A";
    }
    elseif($y>=63 && $y<70)
    {
        echo "Grade B";
    }
    elseif($y>=51 && $y<62) 
    {
        echo "Grade C";
    }
    elseif($y>=44 && $y<50)
    {
        echo "Grade D";
    }
    else {
        echo "Grade F";
    }
}
echo exam(30);
?>
    
</body>
</html>