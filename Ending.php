<?php

namespace swuppio\ruEnding;

class Ending
{
    function __construct(
        private readonly array $words
    ) {}

    public static function get(int $number, array $words = ['Друг', 'Друга', 'Друзей']): string 
    {
        // if the number between *11 and *19 we need the third option
        // from 0 to 5 we have array map
        if ($number % 100 > 10 && $number % 100 < 20) {
            $key = 2;
        } else {
            $zero_to_five = [2,0,1,1,1,2];
            $rest = $number % 10;
            $key = $zero_to_five[min($rest, 5)];
        }

        return $words[$key];
    }

    public function formatByNumber(int $number): string
    {
        return static::get($number, $this->words);
    }
}
