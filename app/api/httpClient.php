<?php

class httpClient {
    public static function makeHttpRequest($url, $method = 'GET', $body = null) {
        $options = array(
            'http' => array(
                'method' => $method,
                'header' => 'Content-Type: application/json;charset=UTF-8'
            )
        );

        if ($body !== null) {
            $options['http']['content'] = json_encode($body);
        }

        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        return json_decode($result, true);
    }
}
