<?php

namespace App\Helpers;

use Stichoza\GoogleTranslate\GoogleTranslate;

class Translation
{
    public static function trans($text)
    {
        $tr = new GoogleTranslate(); // Translates to 'en' from auto-detected language by default

        return $tr->translate($text);
    }

}
