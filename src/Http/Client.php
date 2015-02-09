<?php namespace ChiPhp\Playground\Http;

class Client
{
    /**
     * Send a GET request.
     *
     * @param string $url
     *
     * @return Response
     */
    public function get($url)
    {
        $options = [
            'http' => [
                'method' => 'GET',
                'header' => "User-Agent: chi-php-ug\r\nAccept-Encoding: *",
                'ignore_errors' => true
            ],
        ];
        $stream = stream_context_create($options);
        $rawBody = file_get_contents($url, false, $stream);

        return new Response($http_response_header, $rawBody);
    }
}
