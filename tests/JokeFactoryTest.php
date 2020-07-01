<?php
namespace Tiagofv\chuckApi\Tests;

use PHPUnit\Framework\TestCase;
use Tiagofv\chuckApi\JokeFactory;
class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_joke( ){
        $jokes = new JokeFactory([
            'This is a Joke'
        ]);
        $joke = $jokes->getRandomJoke();

        $this->assertSame('This is a Joke', $joke);
    }
    /** @test */
    public function it_contains_a_random_joke(){
        $jokes = new JokeFactory();
        $chuckJokes = $jokes->jokes;

        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $chuckJokes);
    }
}