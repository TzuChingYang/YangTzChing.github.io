<!DOCTYPE html>
<html>
<head>
    <style>

    </style>
</head>

<body>
<?php
    $x=5 ;
    $y=10 ;

    function test(){
        global $x,$y ;
        $y=$x+$y ;
    }

    test();
    echo $y ;
?>
</body>
</html>