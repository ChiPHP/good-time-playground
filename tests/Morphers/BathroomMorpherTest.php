<?php namespace ChiPhp\Playground\Test\Morphers;

use ChiPhp\Playground\Morphers\BathroomMorpher;
use ChiPhp\Playground\Http\Response;

class BathroomMorpherTest extends \PHPUnit_Framework_TestCase
{
    public function testContentWillBeBathroomized()
    {
        $response = new Response([], 'foo');
        $morpher = new BathroomMorpher();

        $content = $morpher->morph($response);
        $this->assertEquals('Poop!foo', $content);
    }
}
