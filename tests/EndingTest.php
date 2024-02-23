<?php 

declare(strict_types = 1);

use PHPUnit\Framework\TestCase;
use swuppio\ruEnding\Ending;

final class EndingTest extends TestCase
{
    public $words = ['Друг', 'Друга', 'Друзей'];

    /**
     * @dataProvider mapDataProvider
     */
    public function testEndingsStatic($number, $expectWord): void
    {
        $this->assertSame($expectWord, Ending::get($number, $this->words));
    }

    /**
     * @dataProvider mapDataProvider
     */
    public function testEndingsObject($number, $expectWord): void
    {
        $object = new Ending($this->words);
        $this->assertSame($expectWord, $object->formatByNumber($number));
    }

    public static function mapDataProvider()
    {
        return [
            [
                'number' => 1,
                'word' => 'Друг'
            ],
            [
                'number' => 2,
                'word' => 'Друга'
            ],
            [
                'number' => 4,
                'word' => 'Друга'
            ],
            [
                'number' => 5,
                'word' => 'Друзей'
            ],
            [
                'number' => 10,
                'word' => 'Друзей'
            ],
            [
                'number' => 12,
                'word' => 'Друзей'
            ],
            [
                'number' => 21,
                'word' => 'Друг'
            ],
            [
                'number' => 102,
                'word' => 'Друга'
            ],
        ];
    }
}