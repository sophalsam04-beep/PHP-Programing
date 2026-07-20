<?php

    $name = "Un virak";
    // heredoc
        // used for long string
    $str = <<< EOD
    
    Hello $name This is my heredoc used for multiple line string;

    EOD;

    echo $str;
?>