<h1 align="center"> Laravel Emoji </h1>

<p align="center"> :smile: This package assist you in getting started with emoji easily.</p>

## Installing

```shell
$ composer require xuejd3/laravel-emoji
```

> Laravel auto-discovery supported.

If you are using < laravel 5.5

### Add service provider

```php
Xuejd3\LaravelEmoji\EmojiServiceProvider::class,
```

### Add alias

```php
'Emoji' => Xuejd3\LaravelEmoji\Emoji::class,
```

## Usage

```php
Emoji::toImage(':smile:'); // <img class="joypixels" alt="&#x1f604;" title=":smile:" src="https://cdn.jsdelivr.net/joypixels/assets/5.0/png/unicode/32/1f604.png">
Emoji::toShort('😄'); // :smile:
Emoji::shortnameToUnicode(':smile:'); // 😄

// using helper
// default transform shorname to unicode, you can change it in config file.
emoji(':smile:'); // 😄

// access emoji services, return \JoyPixels\Client instance.
app('emoji');
// or 
app(\JoyPixels\Client::class);
```

### Configurations

```shell
// config
$ php artisan vendor:publish --provider="Xuejd3\\LaravelEmoji\\EmojiServiceProvider"
```

## License

MIT
