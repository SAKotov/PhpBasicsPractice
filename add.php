<?php
$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password = 'root'; //пароль, по умолчанию пустой
$db_name = 'test'; //имя базы данных

//Соединяемся с базой данных используя наши доступы:




$link = mysqli_connect($host, $user, $password, $db_name);
if (!empty($_POST))
{
    $name = $_POST['name'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];

    $query = "INSERT INTO workers SET name='$name', age='$age', salary='$salary'";
    mysqli_query($link, $query) or die (mysqli_error($link));
}
?>

<form action="" method="POST">
    Имя <input name="name" value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>">
    Возраст <input type="text" name="age" value="<?php if (isset($_POST['age'])) echo $_POST['age']; ?>">
    ЗП <input type="text" name="salary" value="<?php if (isset($_POST['salary'])) echo $_POST['salary']; ?>">
    Добавить работника <input type="submit">
</form>
