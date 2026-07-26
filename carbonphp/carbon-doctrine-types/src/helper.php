<?php
    // use function not class for load file
    function format_currency(float $amount): string{
            return "$". number_format($amount, 2);
    }







?>