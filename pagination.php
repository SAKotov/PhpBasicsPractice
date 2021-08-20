<style>
    a {
        text-decoration: none;
    }
    a.active {
        text-decoration: underline;
    }
</style>

<?php

$host = 'localhost';
$user = 'root';
$password = 'root';
$dbName = 'test';

$link = mysqli_connect($host, $user, $password, $dbName )
    or die(mysqli_error($link));

if (isset($_GET['page'])){
    $page = $_GET['page'];
} else {
    $page = 1;
}

$notesOnPage = 2;

$from = ($page - 1) * $notesOnPage;
echo $from;

$query = "SELECT * FROM users WHERE id > 0 LIMIT $from, $notesOnPage";

$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
echo '<pre>';
var_dump($data);

$query = "SELECT COUNT(*) as count FROM users";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$count = mysqli_fetch_assoc($result )['count'];
$pagesCount = ceil($count / $notesOnPage);

for ($i = 1; $i <= $pagesCount; $i++){
    if ($page == $i)
    {
        $class = 'class="active"';
    } else
    {
        $class = '';
    }
    echo "<a href=\"?page=$i\" $class>$i</a> ";
}
?>



