<?php
        // finally in php
    try{
        echo "Trying here...!\n";
        throw new Exception("something went wrong...!\n");
        
    }catch(Exception $e){
        echo "caught :". $e->getMessage();
    }finally{
        echo "finally alway execute...!\n";
    }

    try{
        echo "Trying...!\n";
        throw new Exception("something went wrong...!\n");
    }catch(Exception $e){
        echo "caught : ". $e->getMessage();
    }finally{
        echo "finally alway run...!\n";
    }



?>