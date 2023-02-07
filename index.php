<?php
    function ucgen(){
        $satir = 15;
        for($i = 1;$i<=$satir;$i++){
            $j = 1;
            while($j <= $i){
                echo "0";
                $j++;
            }
            echo "<br/>";
        }
    }
    ucgen();
?>