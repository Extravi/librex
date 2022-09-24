<?php
    function get_suggestions_results($query) {
        global $config;
        $query_encoded = urlencode($query);
        $url = "http://suggestqueries.google.com/complete/search?output=firefox&q=$query_encoded";

        // Make request
        $ch = curl_init($url);
        curl_setopt_array($ch, $config->curl_settings);
        $result = curl_exec($ch);
        return $result;
    }

    function print_suggestions_results($result) {
        echo $result;
    }
?>