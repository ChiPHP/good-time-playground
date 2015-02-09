<?php namespace ChiPhp\Playground;

use ChiPhp\Playground\Http\Client;
use ChiPhp\Playground\Http\Response;
use ChiPhp\Playground\Morphers\MorpherInterface;

class SillySiteMorpher
{

    /**
     * @var Response
     */
    private $response;

    /**
     * @param string $url The URL that we will pull the content from.
     */
    public function __construct($url)
    {
        $client = new Client();
        $this->response = $client->get($url);
    }

    /**
     * Morph the content!
     *
     * @param MorpherInterface $morpher The morpher we want to load.
     *
     * @return string Returns the content after it has been morphed.
     */
    public function morph(MorpherInterface $morpher)
    {
        return $morpher->morph($this->response);
    }
}
