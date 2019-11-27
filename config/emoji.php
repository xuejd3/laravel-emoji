<?php

/*
 * This file is part of the xuejd3/laravel-emoji.
 *
 * (c) xuejd3 <xuejd3@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

return [
    // defualt method of 'emoji' function:
    // emoji($string);
    'default_helper_method' => 'shortnameToUnicode',

    /*
     * Client options
     */
    'options'               => [
        // defaults to jsdelivr's free CDN
        'image_path'    => null,

        // use sprite image.
        'sprites'       => false,

        // available sizes are '32' and '64'
        'sprite_size'   => 32,

        // convert ascii smileys?
        'ascii'         => false,

        // convert shortcodes?
        'shortcodes'    => true,

        // use the unicode char as the alt attribute (makes copy and pasting the resulting text better)
        'unicode_alt'   => true,

        // available sizes are '32', '64', and '128'
        'emoji_size'    => 32,

        // emoji version
        'emoji_version' => '5.0',
    ],
];
