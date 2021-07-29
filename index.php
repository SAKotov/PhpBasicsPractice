<?php
error_reporting(E_ALL);
// 1.   Спросите у пользователя имя с помощью формы. Сделайте чекбокс: если он отмечен,
//      то поприветствуйте пользователя, если не отмечен - попрощайтесь с пользователем.
//
//
//
//
//?>
<!---->
<!--<form action="index.php" method="GET" >-->
<!--    <input type="text" name="name">-->
<!--    <input type="hidden" name="check" value="0">-->
<!--    <input type="checkbox" name="check" value="1">-->
<!--    <input type="submit" value="PUSH">-->
<!--</form>-->
<!---->
<!---->
<?php
//
//if (!empty($_GET) && $_GET['check'] == 1)
//{
//    echo 'hi ' . $_GET['name'];
//}
//elseif (!empty($_GET) && $_GET['check'] == 0)
//{
//    echo 'bb' . $_GET['name'];
//}
//
//
//?>
<!--// 2.   Спросите у пользователя, какие из языков он знает: html, css, php, javascript.-->
<!--//      Выведите на экран те языки, которые знает пользователь.-->

<?php
//var_dump($_GET);
//if (isset($_GET['lang']))
//{
//    echo 'Вы знаете: ' . implode(',', $_GET['lang']);
//}
//echo '<br/>'
//?>


<!--<form action="index.php" method="GET" >-->
<!--    <input type="text" name="lang[]">-->
<!--    <p>HTML<input type="checkbox" name="lang[]" value="HTML"></p>-->
<!--    <p>CSS<input type="checkbox" name="lang[]" value="CSS"></p>-->
<!--    <p>JS<input type="checkbox" name="lang[]" value="JS"></p>-->
<!--    <p>PHP<input type="checkbox" name="lang[]" value="PHP"></p>-->
<!--    <input type="submit" value="PUSH">-->
<!--</form>-->
<!---->


<?php
//
//// 3.   Спросите у пользователя знает ли он PHP с помощью двух radio-кнопок.
////      Выведите результат на экран. Сделайте так, чтобы по умолчанию один из вариантов был уже отмечен.
//
//
//        if (isset($_GET['variable']) && $_GET['variable'] == 1)
//            echo 'Ура, Вы знаете PHP!';
//        elseif (isset($_GET['variable']) && $_GET['variable'] == 0)
//            echo 'Вы не знаете PHP(((';
//?>

<!--<form action="" method="GET">-->
<!--    <p>Знаете ли Вы PHP?</p>-->
<!--    <p>Да, знаю<input type="radio" name="variable" value="1" ></p>-->
<!--    <p>Нет, не знаю<input type="radio" name="variable" value="0" checked></p>-->
<!--    <input type="submit" value="push">-->
<!--</form>-->


<!--4.  Спросите у пользователя его возраст с помощью нескольких radio-кнопок.-->
<!--    Варианты ответа сделайте такими: менее 20 лет, 20-25, 26-30, более 30.-->


<!--<form action="" method="GET">-->
<!--    <p>Укажите Ваш возраст</p>-->
<!--    <p>Менее 20 лет<input type="radio" name="variable" value="1"></p>-->
<!--    <p>20-25 лет<input type="radio" name="variable" value="2"></p>-->
<!--    <p>26-30 лет<input type="radio" name="variable" value="3"></p>-->
<!--    <p>более 30 лет<input type="radio" name="variable" value="4"></p>-->
<!--    <input type="submit" value="push">-->
<!--</form>-->

<?php
//        if (isset($_GET['variable']) && $_GET['variable'] == 1)
//            echo 'Вам менее 20 лет';
//        elseif (isset($_GET['variable']) && $_GET['variable'] == 2)
//            echo 'Вам от 20 до 25 лет';
//        elseif (isset($_GET['variable']) && $_GET['variable'] == 3)
//            echo 'Вам от 26 до 30 лет';
//        elseif (isset($_GET['variable']) && $_GET['variable'] == 4)
//            echo 'Ухх, старичек:-)';
?>


<!-- 6.     Спросите у пользователя его возраст с помощью select.-->
<!--        Варианты ответа сделайте такими: менее 20 лет, 20-25, 26-30, более 30.-->

<!--<form action="" method="GET">-->
<!--    <p>Укажите Ваш возраст</p>-->
<!--    <select name="age" id="1">-->
<!--        <option value="1" name="age">Менее 20 лет</option>-->
<!--        <option value="2" name="age">20-25 лет</option>-->
<!--        <option value="3" name="age">26-30 лет</option>-->
<!--        <option value="4" name="age">более 30 лет</option>-->
<!--    </select>-->
<!--    <input type="submit" value="push">-->
<!--</form>-->

<?php
//        if (isset($_GET['age']) && $_GET['age'] == 1)
//            echo 'Вам менее 20 лет';
//        elseif (isset($_GET['age']) && $_GET['age'] == 2)
//            echo 'Вам от 20 до 25 лет';
//        elseif (isset($_GET['age']) && $_GET['age'] == 3)
//            echo 'Вам от 26 до 30 лет';
//        elseif (isset($_GET['age']) && $_GET['age'] == 4)
//            echo 'Ухх, старичек:-)';
?>

<!-- 7.     Спросите у пользователя с помощью мультиселекта, какие из языков он знает: html, css, php, javascript.
    Выведите на экран те языки, которые знает пользователь.-->


<!--<form action="" method="GET">-->
<!--    <p>Какие ЯП Вы знаете?</p>-->
<!--    <select id="1"  name="lang[]" multiple>-->
<!--        <option value="JS">JS</option>-->
<!--        <option value="HTML">HTML</option>-->
<!--        <option value="PHP">PHP</option>-->
<!--        <option value="CSS">CSS</option>-->
<!--    </select>-->
<!--    <input type="submit" value="push">-->
<!--</form>-->

<?php

//    if (isset($_GET['lang']))
//    {
//        echo 'Вы знаете ' . implode(',', $_GET['lang']);
//    }
?>

<!-- 8.    Сделайте функцию, которая создает обычный текстовый инпут.
           Функция должна иметь следующие параметры: type, name, value.
           Модифицируйте функцию из предыдущей задачи так, чтобы она сохраняла значение инпута после отправки-->


<?php
//function input($type, $name, $value)
//{
//    if (isset($_GET[$name]))
//    {
//        $value = $_GET[$name];
//    }
//    return "<input type=".$type." name=".$name." value=".$value.">";
//}
//

?>

<!--<form action="" method="GET">-->
<!--    --><?php //echo input('text', 'input', '1');?>
<!--    <input type="submit">-->
<!--</form>-->

<!-- 9.    Сделайте функцию, которая создает чекбокс.
           Если чекбокс не отмечен - функция должна отправлять 0 (то есть нужно сделать hidden инпут), если отмечен - 1-->


<?php

//function input($name)
//{
//    if(isset($_REQUEST[$name]) and $_REQUEST[$name] == 1) {
//        $value = 'checked';
//    } else {
//        $value = '';
//    }
//    return '<input type="hidden" name="'.$name.'" value="0">
//		<input type="checkbox" name="'.$name.'" value="1" '.$value.'>';
}
?>

<!--<form action="" method="get">-->
<!--    --><?php //echo input('chek1')?>
<!--    --><?php //echo input('chek2')?>
<!--    --><?php //echo input('chek3')?>
<!--    <input type="submit">-->
<!--</form>-->
