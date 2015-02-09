<?php namespace ChiPhp\Playground\Morphers;

use ChiPhp\Playground\Http\Response;

class BathroomMorpher implements MorpherInterface
{
    /**
     * @inheritdoc
     */
    public function morph(Response $response)
    {
        $body = $response->getBody();

        // @todo Add logic to replace random words with poopy-words.

        return 'Poop!' . $body;
    }
}
