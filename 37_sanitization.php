<?php
    // Sanitization -> transform and clear data

    // sanitize string
    $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // santize email
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    // santize url
    $url = filter_var($_POST['url'], FILTER_SANITIZE_URL);

    // santize integer
    $number = filter_var($_POST['number'], FILTER_SANITIZE_NUMBER_INT);

    // HTML Tag entiry
    $clean = strip_tags($_POST['comment'], );

    // allow specific tag only
    $clean = strip_tags($_POST['comment'], '<br><b><i><p>');


    // ESCAPE html output
    $safeoutput = htmlspecialchars($name);

    
    





?>