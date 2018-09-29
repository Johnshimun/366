<?php

function play(){
// randomvalue function
for ($i = 1; $i < 4; $i++) {
    ${"randomValue" . $i}= rand(0, 2);
    displaySymbol(${"randomValue" . $i}, $i);
    }
}

?>