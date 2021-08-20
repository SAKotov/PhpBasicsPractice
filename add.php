<?php


$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password = 'root'; //пароль, по умолчанию пустой
$db_name = 'test'; //имя базы данных



$link = mysqli_connect($host, $user, $password, $db_name);

function input($name)
{
    if (isset($_POST[$name]))
    {
        $value = $_POST[$name];
    } else
    {
        $value = '';
    }


    return '<input name="' . $name . '" value="' . $value .'">';
}

if (!empty($_POST))
{
    $name = $_POST['name'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];

    $query = "INSERT INTO workers SET name='$name', age='$age', salary='$salary'";
    mysqli_query($link, $query) or die (mysqli_error($link));
}
?>
`
<form action="" method="POST">
    Имя<?php echo input('name');?>
    Возраст<?php echo input('age');?>
    ЗП<?php echo input('salary');?>
     <input type="submit" value="добавить работника">
</form>
