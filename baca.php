<?php
    $file_contents = file_get_contents('data.txt');
    echo $file_contents;

    //header('Content-Encoding: bz2');
    // $compressed = bzcompress($file_contents);
    //header('Content-Length: ' . strlen($compressed));

    // echo $compressed;