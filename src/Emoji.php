<?php

/*
 * This file is part of the xuejd3/laravel-emoji.
 *
 * (c) xuejd3 <xuejd3@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Xuejd3\LaravelEmoji;

use JoyPixels\Client;
use Illuminate\Support\Facades\Facade;

/**
 * Class Emoji.
 * @author xuejd3 <xuejd3@gmail.com>
 * @method string toImage(string $string)               Convert Native Unicode Emoji and Shortnames Directly to Images.
 * @method string toShort(string $string)               Convert Native Unicode Emoji to Shortnames.
 * @method string unicodeToImage(string $string)        Convert Native Unicode Emoji Directly to Images.
 * @method string shortnameToImage(string $string)      Convert Shortnames to Images.
 * @method string shortnameToUnicode(string $string)    Convert Shortnames to Native Unicode.
 */
class Emoji extends Facade
{
    /**
     * Return the facade accessor.
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return Client::class;
    }
}
