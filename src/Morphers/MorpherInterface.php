<?php namespace ChiPhp\Playground\Morphers;

use ChiPhp\Playground\Http\Response;

interface MorpherInterface
{
    /**
     * Morphs the content of an HTTP response and returns the mutated body.
     *
     * @param Response $response
     *
     * @return string
     */
    public function morph(Response $response);
}
