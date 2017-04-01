<?php 

 $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://www.r10.net");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);

    $pattern = '#<h1>([^\n]+.*?)</h1>#';
    preg_match($pattern, $output, $matches);

    var_dump($matches);
?>

