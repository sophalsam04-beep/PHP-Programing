
<?php
        // catch in php
    try{
        throw new InvalidArgumentException("Bad input");
        throw new RuntimeException("Thank you");

    }catch(RuntimeException $e){

        echo "Won't match!";

    }catch(InvalidArgumentException $e){

        echo "Match here!";
        
    }catch(Exception $e){
            echo "Would also match but never reached...!";
    }


?>