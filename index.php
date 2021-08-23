<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
//include 'working_with_php.php';
//include 'work_with_GET_requests.php';
//include 'regular_expressions.php';
//include 'working_with_files.php';
//include 'working_with_sessions.php';
//include 'working_with_sessions.php';
//include 'add.php';
//include 'working_with_DB.php';
//include 'pagination.php';


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="wrapper">
        <header>
            <?php include 'engine_creation/elements/header.php'?>
        </header>
        <main>
            <?php
                $page = $_GET['page'];
                $path = "engine_creation/pages/$page.php";

                if (file_exists($path))
                {
                    include $path;
                } else
                {
                    echo 'page not found';
                }
            ?>
        </main>
        <footer>
            <?php include 'engine_creation/elements/footer.php'?>
        </footer>
    </div>
</body>
</html>
