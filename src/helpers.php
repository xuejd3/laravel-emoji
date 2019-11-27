<?php

/*
 * This file is part of the xuejd3/laravel-emoji.
 *
 * (c) xuejd3 <xuejd3@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use JoyPixels\Client;

if (! function_exists('emoji')) {
    /**
     * Convert emoji shortname to image.
     *
     * @param string $shortname
     *
     * @return string
     */
    function emoji($shortname)
    {
        return call_user_func([app(Client::class), config('emoji.default_helper_method', 'shortnameToUnicode')],
            $shortname);
    }
}
