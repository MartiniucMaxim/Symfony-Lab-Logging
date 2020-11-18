<?php


namespace App;


class GreetingGenerator
{
    public function getRandomGreeting()
    {
        $greetings = ['Salut','Privet','Noroc'];
        $greetings = $greetings[array_rand($greetings)];

        return $greetings;
    }
}