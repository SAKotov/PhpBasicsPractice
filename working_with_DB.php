<?php

//Устанавливаем доступы к базе данных:
//$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
//$user = 'root'; //имя пользователя, по умолчанию это root
//$password = 'root'; //пароль, по умолчанию пустой
//$db_name = 'test'; //имя базы данных
//
////Соединяемся с базой данных используя наши доступы:
//$link = mysqli_connect($host, $user, $password, $db_name);


//Формируем запросы:
echo '<pre>';
//$query = "SELECT * FROM workers WHERE id = 3";
//$query = "SELECT * FROM workers WHERE salary = 1000";
//$query = "SELECT * FROM workers WHERE age = 23";
//$query = "SELECT * FROM workers WHERE salary > 400";
//$query = "SELECT * FROM workers WHERE salary >= 500";
//$query = "SELECT * FROM workers WHERE salary <= 900";
//$query = "SELECT * FROM workers WHERE name = 'Вася'";
//$query = "SELECT age, salary FROM workers WHERE name = 'Вася'";
//$query = "SELECT salary, age FROM workers WHERE name = 'Вася'";
//$query = "SELECT salary, age FROM workers WHERE name = 'Вася'";
//$query = "SELECT * FROM workers WHERE age > 25 AND age < 28";
//$query = "SELECT * FROM workers WHERE name = 'Петя'";
//$query = "SELECT * FROM workers WHERE name = 'Вася' OR name = 'Петя'";
//$query = "SELECT * FROM workers WHERE age >= 23 AND salary ='1000'";
//$query = "SELECT * FROM workers WHERE age >= 23 OR age < 27 AND salary = 1000 ";
//$query = "SELECT * FROM workers WHERE age = '27' AND salary != '400' ";
//$query = "INSERT INTO workers SET name='Никита', age='26', salary='300' ";
//$query = "INSERT INTO workers (name , age, salary) VALUES ('Светлана', 33, 1200)";
//$query = "INSERT INTO workers(name, age, salary) VALUES ('Ярослав', 30, 1200), ('Пётр', 31, 1000)";
//$query = "INSERT INTO workers(name, age, salary) VALUES ('Дима', 23, 400),       ('Петя', 25, 500),       ('Вася', 23, 500),       ('Коля', 30, 1000),
//       ('Иван', 27, 500),       ('Кирилл', 28, 1000)";
//$query = "DELETE FROM workers WHERE id = 7";
//$query = "DELETE FROM workers WHERE name='Светлана'";
//$query = "DELETE FROM workers WHERE age = 23 ";
//$query = "UPDATE workers SET salary='200' WHERE name='Петя'";
//$query = "UPDATE workers SET age = 35 WHERE id=10";
//$query = "UPDATE workers SET salary=500 WHERE salary=700";
//$query = "UPDATE workers SET age=25 WHERE id >= 2 AND id <= 5";
//$query = "UPDATE workers SET name =' Женя', salary = 900 WHERE name = 'Ярослав' ";
//$query = "SELECT * FROM workers WHERE id>0 LIMIT 6";
//$query = "SELECT * FROM workers WHERE id > 2 LIMIT 3";
//$query = "SELECT * FROM workers ORDER BY salary";
//$query = "SELECT * FROM workers ORDER BY salary DESC";
//$query = "SELECT * FROM workers WHERE id > 2 ORDER BY age LIMIT 4 ";
//$query = "SELECT COUNT(*) FROM workers";
//$query = "SELECT COUNT(*) FROM workers WHERE salary = 1000";
//$query = "INSERT INTO pages (author, article) VALUES
//                                           (
//                                            'Петров', 'В своей статье рассказывает о машинах.'
//                                           ),
//                                           (
//                                            'Иванов', 'Написал статью об инфляции.'
//                                           ),
//                                           (
//                                            'Сидоров', 'Придумал новый химический элемент.'
//                                           ),
//                                           (
//                                            'Осокина', 'Также писала о машинах.'
//                                           ),
//                                           (
//                                            'Ветров', 'Написал статью о том, как разрабатывать элементы дизайна.'
//                                           )";

//$query = "SELECT * FROM pages WHERE author LIKE '%ов'";
//$query = "SELECT * FROM workers WHERE age LIKE '3_'";

$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password = 'root'; //пароль, по умолчанию пустой
$db_name = 'test'; //имя базы данных

//Соединяемся с базой данных используя наши доступы:




$link = mysqli_connect($host, $user, $password, $db_name);






?>

<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
        <th>salary</th>
        <th>delete</th>
    </tr>
    <?php

    if (isset($_GET['del']))
    {
        $del = $_GET['del'];
        $query = "DELETE FROM workers WHERE id=$del";
        mysqli_query($link, $query) or die(mysqli_error($link));
    }

    $query = "SELECT * FROM workers";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);


    $result = '';
    foreach ($data as $elem)
    {
        $result .= '<tr>';
        $result .= '<td>' . $elem['id'] . '</td>';
        $result .= '<td>' . $elem['name'] . '</td>';
        $result .= '<td>' . $elem['age'] . '</td>';
        $result .= '<td>' . $elem['salary'] . '</td>';
        $result .= '<td><a href="?del=' . $elem['id'] . ' ">удалить</a></td>';


        $result .= '</tr>';
    }
    echo $result;

    ?>
</table>

<!--//Делаем запрос к БД, результат запроса пишем в $result:-->
<!--//$result = mysqli_query($link, $query) or die(mysqli_error($link));-->
<!--//-->
<!--//-->
<!--//Преобразуем то, что отдала нам база в нормальный массив PHP $data:-->
<!--//for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);-->
<!---->
<!---->
<!--var_dump($data);-->