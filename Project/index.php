<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $a=7;
    $b=15;
    $c=10;
    $d=$a+$b+$c;
    echo $d; echo"<br>";
    $e = "This is ICT3 Class";
    echo $e;

    function local(){
        $john = 70;
        global $a;
        $z = $john + $a;
        echo $z;
    }
    local();

   // $f = $john + $a;
    //echo $f;
    ?>
</body>
</html>