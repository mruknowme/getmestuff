<?php

namespace App\Rules;


use App\GlobalSettings;

class MaxWish
{
    public $max_words;

    public function __construct()
    {
        $this->max_words = GlobalSettings::getSettings('max_number_of_words_in_title')->data['value'];
    }

    public function passes($attribute, $value)
    {
        $string = explode(' ', $value);

        return ! (count($string) > $this->max_words);
    }

    public function replaceWords($message) {
        $replacer = $this->max_words.' '.str_plural('word', $this->max_words);
        return str_replace(':num_words', $replacer, $message);
    }
}