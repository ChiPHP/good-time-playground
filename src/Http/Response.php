<?php namespace ChiPhp\Playground\Http;

class Response
{
    /**
     * @var array The response headers
     */
    private $headers;

    /**
     * @var string The raw response body.
     */
    private $rawBody;

    /**
     * @param array $headers
     * @param string $rawBody
     */
    public function __construct(array $headers, $rawBody)
    {
        $this->headers = $this->parseHeaders($headers);
        $this->rawBody = $rawBody;
    }

    /**
     * Get the response headers.
     *
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Get the response body.
     *
     * @return string
     */
    public function getBody()
    {
        return $this->rawBody;
    }

    /**
     * Parse the response headers.
     *
     * @param array $rawHeaders
     *
     * @return string
     */
    private function parseHeaders(array $rawHeaders)
    {
        $headers = [];

        foreach ($rawHeaders as $line) {
            if (strpos($line, ': ') === false) {
                // @todo Maybe add this later?
                //$this->setHttpResponseCodeFromHeader($line);
            } else {
                list ($key, $value) = explode(': ', $line);
                $headers[$key] = $value;
            }
        }

        return $headers;
    }
}
