<?php
/*$str = 'grey';
$pattern = '/gr.y/';

if(preg_match($pattern, $str)){
    echo "Строка |<b>$str</b>| <span style='color: green'>совпала</span> с шаблоном <b><em>$pattern</em></b>";
}else{
    echo "Строка |<b>$str</b>| <span style='color: red'>не совпала</span> с шаблоном<b><em>$pattern</em></b>";
}*/


// 1. Дана строка 'ahb acb aeb aeeb adcb axeb'.
// Напишите регулярку, которая найдет строки ahb, acb, aeb по шаблону: буква 'a', любой символ, буква 'b'

//
//$str = 'ahb acb aeb aeeb adcb axeb';
//
//echo preg_replace('/a.b/','!', $str);


// 2. Дана строка 'aba aca aea abba adca abea'.
// Напишите регулярку, которая найдет строки abba adca abea по шаблону: буква 'a', 2 любых символа, буква 'a'.

//$str = 'aba aca aea abba adca abea';
//
//echo preg_replace('/a..a/', '!', $str);

// 3. Дана строка 'aba aca aea abba adca abea'.
// Напишите регулярку, которая найдет строки abba и abea, не захватив adca.

//$str = 'aba aca aea abba adca abea';
//
//echo preg_replace('/ab.a/', '!', $str);

// 4. Дана строка 'aa aba abba abbba abca abea'.
// Напишите регулярку, которая найдет строки
// aba, abba, abbba по шаблону: буква 'a', буква 'b' любое количество раз, буква 'a'.


//$str = 'aa aba abba abbba abca abea';
//
//echo preg_replace('/ab+a/','!', $str);

// 5. Дана строка 'aa aba abba abbba abca abea'.
// Напишите регулярку, которая найдет строки aa, aba, abba, abbba по шаблону:
// буква 'a', буква 'b' любое количество раз (в том числе ниодного раза), буква 'a'.

//$str = 'aa aba abba abbba abca abea';
//
//echo preg_replace('/a+b*a/', '!', $str);

// 6. Дана строка 'aa aba abba abbba abca abea'.
// Напишите регулярку, которая найдет строки aa, aba по шаблону:
// буква 'a', буква 'b' один раз или ниодного, буква 'a'.

//$str = 'aa aba abba abbba abca abea';
//
//echo preg_replace('#ab?a#', '!', $str);

// 7. Дана строка 'ab abab abab abababab abea'.
// Напишите регулярку, которая найдет строки по шаблону:
// строка 'ab' повторяется 1 или более раз.


//$str = 'ab abab abab abababab abea';
//
//echo preg_replace('/(ab)+/', '!', $str);

// 8. Дана строка 'a.a aba aea'. Напишите регулярку, которая найдет строку a.a, не захватив остальные.


//$str = 'a.a aba aea';
//
//echo preg_replace('#a\.a#', '!', $str);

// 9. Дана строка '2+3 223 2223'. Напишите регулярку, которая найдет строку 2+3, не захватив остальные.

//$str = '2+3 223 2223';
//
//echo preg_replace('/2\+3/', '!', $str);


// 10. Дана строка '23 2+3 2++3 2+++3 345 567'.
// Напишите регулярку, которая найдет строки 2+3, 2++3, 2+++3,
// не захватив остальные (+ может быть любое количество).

//$str = '23 2+3 2++3 2+++3 345 567';
//
//echo preg_replace('/2\++3/', '!', $str);


// 11. Дана строка '23 2+3 2++3 2+++3 445 677'.
// Напишите регулярку, которая найдет строки 23, 2+3, 2++3, 2+++3, не захватив остальные.

// 12. Дана строка '*+ *q+ *qq+ *qqq+ *qqq qqq+'.
// Напишите регулярку, которая найдет строки *q+, *qq+, *qqq+, не захватив остальные.

//$str = '*+ *q+ *qq+ *qqq+ *qqq qqq+';
//
//echo preg_replace('/\*q+\+/', '!', $str);

// 13. Дана строка '*+ *q+ *qq+ *qqq+ *qqq qqq+'.
// Напишите регулярку, которая найдет строки *+, *q+, *qq+, *qqq+, не захватив остальные.

//$str = '*+ *q+ *qq+ *qqq+ *qqq qqq+';
//
//echo preg_replace('/\*q*\+/', '!', $str);

// 14. Дана строка 'aba accca azzza wwwwa'.
// Напишите регулярку, которая найдет все строки по краям которых стоят буквы 'a',
// и заменит каждую из них на '!'.
// Между буквами a может быть любой символ (кроме a).

$str = 'aba accca azzza wwwwa';

echo preg_replace('/a.+?a/', '!', $str);