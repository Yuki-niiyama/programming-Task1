<?php
$answer = 2;
while($answer <= 1000) {
    $i = 2;
    while($i < $answer) {
        if ($answer % $i == 0) {
            break;
        }
        $i++;
    }
    
    if($i == $answer) {
        echo($answer);
        echo"<br>";
    }
    $answer++;
}

