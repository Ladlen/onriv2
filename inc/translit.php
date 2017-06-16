<?php

//==================================================TRANSLIT RU->EN

function rus2translit($string) {

    $converter = array(

        'а' => 'a',   'б' => 'b',   'в' => 'v',

        'г' => 'g',   'д' => 'd',   'е' => 'e',

        'ё' => 'e-',   'ж' => 'zh',  'з' => 'z',

        'и' => 'i',   'й' => 'y',   'к' => 'k',

        'л' => 'l',   'м' => 'm',   'н' => 'n',

        'о' => 'o',   'п' => 'p',   'р' => 'r',

        'с' => 's',   'т' => 't',   'у' => 'u',

        'ф' => 'f',   'х' => 'h',   'ц' => 'c',

        'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',

        'ь' => 'b_',  'ы' => 'y_',   'ъ' => '__',

        'э' => 'e_',   'ю' => 'yu',  'я' => 'ya',

        

        'А' => 'A',   'Б' => 'B',   'В' => 'V',

        'Г' => 'G',   'Д' => 'D',   'Е' => 'E',

        'Ё' => 'E-',   'Ж' => 'Zh',  'З' => 'Z',

        'И' => 'I',   'Й' => 'Y',   'К' => 'K',

        'Л' => 'L',   'М' => 'M',   'Н' => 'N',

        'О' => 'O',   'П' => 'P',   'Р' => 'R',

        'С' => 'S',   'Т' => 'T',   'У' => 'U',

        'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',

        'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',

        'Ь' => '__-',  'Ы' => '-Y',   'Ъ' => '_-_',

        'Э' => '-E',   'Ю' => 'Yu',  'Я' => 'Ya',
		
        ' ' => '_',
    );

    return strtr($string, $converter);

}
//echo rus2translit('У попа была собака, он ее любил.');
//----------------------------------------------------------------

//==================================================TRANSLIT EN->RU
function eng2translit($string) {

    $converter = array(

        'a' => 'а',   'b' => 'б',   'v' => 'в',

        'g' => 'г',   'd' => 'д',   'e' => 'е',

        'e-' => 'ё',   'zh' => 'ж',  'z' => 'з',

        'i' => 'и',   'y' => 'й',   'k' => 'к',

        'l' => 'л',   'm' => 'м',   'n' => 'н',

        'o' => 'о',   'p' => 'п',   'r' => 'р',

        's' => 'с',   't' => 'т',   'u' => 'у',

        'f' => 'ф',   'h' => 'х',   'c' => 'ц',

        'ch' => 'ч',  'sh' => 'ш',  'sch' => 'щ',

        'b_' => 'ь',  'y_' => 'ы',   '__' => 'ъ',

        'e_' => 'э',   'yu' => 'ю',  'ya' => 'я',
		
        'w' => 'в', 'x' => 'х',
        

        'A' => 'А',   'B' => 'Б',   'V' => 'В',

        'G' => 'Г',   'D' => 'Д',   'E' => 'Е',

        'E-' => 'Ё',   'Zh' => 'Ж',  'Z' => 'З',

        'I' => 'И',   'Y' => 'Й',   'K' => 'К',

        'L' => 'Л',   'M' => 'М',   'N' => 'Н',

        'O' => 'О',   'P' => 'П',   'R' => 'Р',

        'S' => 'С',   'T' => 'Т',   'U' => 'У',

        'F' => 'Ф',   'H' => 'Х',   'C' => 'Ц',

        'Ch' => 'Ч',  'Sh' => 'Ш',  'Sch' => 'Щ',

        '__-' => 'Ь',  '-Y' => 'Ы',   '_-_' => 'Ъ',

        '-E' => 'Э',   'Yu' => 'Ю',  'Ya' => 'Я',
		
        '_' => ' ',  'W' => 'В', 'X' => 'Х',
    );

    return strtr($string, $converter);

}
//echo eng2translit('U popa byla sobaka.');
//----------------------------------------------------------------
?>