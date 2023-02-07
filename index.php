<?php
    function ucgen(){
        $satir = 15;
        for($i = 1;$i<=$satir;$i++){
            for($j =1 ;$j<=$i;$j++){
                echo "0";
            }
            echo "<br/>";
        }
    }
    ucgen();
?>