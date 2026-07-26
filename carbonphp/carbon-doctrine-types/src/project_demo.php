<?php
        // autoloading
        require 'vendor/autoload.php';

    use Carbon\Carbon;
    // current date&time
        $now = Carbon::now();
        echo $now;

    // create specific date
        $date = Carbon::create(2026,07,26,0,0,0,0);

    // parse a string
        $date = Carbon::parse('2026-07-26');


    // add & substract time
    $tomorrow = Carbon::now()->addDay();
    $lastweek = Carbon::now()->subWeek();

        
        // Formatting
    echo $now->format('y-m-d') . "\n";
    echo $now->toDateString() . "\n";
    echo $now->toDateTimeString() . "\n";
    echo $now->diffForHumans() . "\n";
    



        // comparison
    $date->diffInDays($date);

    // timezone
    $tokyo = Carbon::now('Asia/Tokyo');













?>