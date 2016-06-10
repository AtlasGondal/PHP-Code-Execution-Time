<?php

    //place this code in the start of your script
    $start = microtime(true);
    
    //Your PHP Code Goes here
    
    //place this line in end of Script
    $end = microtime(true);
    $time = number_format(($end - $start), 2);
    
    echo 'This page loaded in ', $time, ' seconds';

?>
