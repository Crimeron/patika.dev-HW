<?php
$number = $_POST['number'];
echo "Your number is ".$number."</br>";
if($number%3==0){
    echo "The remainder when divided by 3 is 0";
}
else if($number == ""){
    echo "It can't be empty";
}
else{
    echo "The remainder when divided by 3 is not 0</br>";
    while($number%3!=0){
        $number++;
    }
    echo "The closest number is ".$number;
}

?>