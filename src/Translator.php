<?php
    class Translator
    {

        function translate($input_word)
        {
            $input_word_array = strsplit($input_word);

            return $input_word_array;
        }
    }
 ?>
