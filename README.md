# Ru Ending

*This package was made for me, but if you find it useful, I'll be happy if you use it*  

It helps to write beautiful endings without any `а(ов)`, `ь(ей)` etc  

## Installation

### Via Composer

~~~
composer require swuppio/ru-ending
~~~

## Get Started

#### Params description

```php
get(int $number, array $words = ['Друг', 'Друга', 'Друзей']): array
```

- *int* `$number` - The quantity of items to determine the appropriate word form for
- *array* `$words` - An array of word forms to choose from based on $number. The array should include three elements for singular, dual, and plural forms, respectively  

The method returns a string representing the correct word form from `$words` based on the `$number` provided

### Static way

```php
echo Ending::get(5, ['Полис', 'Полиса', 'Полисов']); // Полисов
```

### Object way

```php
$words = ['Полис', 'Полиса', 'Полисов'];

$ending = new Ending($words);
echo $ending->formatByNumber(3); // Полиса
```

***Note: `formatByNumber()` is the alias for `get()`***
