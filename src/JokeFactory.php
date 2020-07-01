<?php

namespace Tiagofv\chuckApi;
class JokeFactory{
    public $jokes = [
        'This is a Joke',
        'Chuck Norris breathes air … five times a day.',
        'In the Beginning there was nothing … then Chuck Norris roundhouse kicked nothing and told it to get a job.',
        'Chuck Norris has a mug of nails instead of coffee in the morning.'
    ];
    public function __construct(array $jokes = null)
    {
        if($jokes){
            $this->jokes = $jokes;
        }
    }
    public function getRandomJoke(){
        return $this->jokes[array_rand($this->jokes)];
    }

}