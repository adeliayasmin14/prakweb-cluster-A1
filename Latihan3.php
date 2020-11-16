<!DOCTYPE html>
<html>
<head>
	<title>latihan3</title>
</head>
<body>
	<?php
        for($i=1;$i<=50;$i++){ 
            $n = 0;
            for($a=1;$a<=$i;$a++){
                if($i % $a==0){
                    $n++;
                }
            }
            if($n==2){
            echo $i.' ';
            }
        }
    ?>
</body>
</html>
