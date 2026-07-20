<?php
    // percentage discount func
        function applypercentageDiscount(float $originalPrice, float $percentage): float{
        if($percentage < 0 || $percentage > 100){
            throw new InvalidArgumentException("Percentage must be between 0 to 100");
            
        }
            return $originalPrice - ($originalPrice * ($percentage / 100));

        }

        // output
            echo applypercentageDiscount(100.00, 15);
            echo "\n";

    function percentageDiscountfunc(float $price, float $percentage):float{
       if($price <0 && $price > 100){
            throw new InvalidArgumentException("Percentage must be 0 between 100...!");

       }

       return $price - ($price * ($percentage / 100));

    }

    // display the result
        echo percentageDiscountfunc(50.0,15);



        // Fixed amount discount function

    function applyamountdiscount(float $orginal_price, float $discountAmount) : float{
        $TotalPrice = $orginal_price - $discountAmount;

            return $TotalPrice > 0 ? 0.00 : $TotalPrice;
    }

    echo applyamountdiscount(50.0,12.50);


    

?>