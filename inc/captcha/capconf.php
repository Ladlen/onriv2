<?php
$use_symbols = "12345679abcdefghijklmnpqrstuwvxwz"; // Здесь Только те буквы, которые Вы хотите выводить
$use_symbols_len=strlen($use_symbols);

$amplitude_min=7; // Минимальная амплитуда волны
$amplitude_max=18; // Максимальная амплитуда волны

$font_width=25; // Приблизительная ширина символа в пикселях

$rand_bsimb_min=7; // Минимальное расстояние между символами (можно отрицательное)
$rand_bsimb_max=9; // Максимальное расстояние между символами

$margin_left=10;// отступ слева
$margin_top=50; // отступ сверху

$font_size=40; // Размер шрифта

$jpeg_quality = 100; // Качество картинки
//$back_count = 1; // Количество фоновых рисунков в папке DMT_captcha_fonts идущих по порядку от 1 до $back_count
$length = 4; 
?>