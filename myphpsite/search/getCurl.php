<?php

    if(array_key_exists('searchTerm', $_GET)){
        $searchTerm = $_GET['searchTerm'];
    }else{
        $searchTerm = '';
    }

    if(array_key_exists('limitResults', $_GET)){
        $limitResults = $_GET['limitResults'];
    }else{
        $limitResults = 10;
    }

    $ch = curl_init();

    $endpoint = 'https://global.atdtravel.com/api/products?geo=en';
    $params = array('title' => htmlspecialchars(stripslashes(trim($searchTerm))), "limit" => $limitResults);
    $url = $endpoint . '&' . http_build_query($params);
    
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    $result = curl_exec($ch);
    $result = json_decode($result);
    $curl_errno = curl_errno($ch);
    $curl_error = curl_error($ch);
    
    curl_close($ch);

    if ($curl_errno > 0) {
        echo "Curl Error ($curl_errno): $curl_error\n";
    }else if(count((array)$result) <= 1){
        echo "No Data";
        ?>
        <script type="text/javascript">searchDefault();</script>
        <?php
    } else {
        return;
    }

?>