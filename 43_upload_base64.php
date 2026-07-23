<?php
        // upload using to base64 API Stype
    $imageData = $_POST['image'];
    $imageData = base64_decode($imageData);

    file_put_contents("upload/image.jpg", $imageData);

        echo "file upload succesfully";




?>