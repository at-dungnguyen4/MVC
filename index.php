<?php
include "Model/Model.php";
$db = new Database();
$db->connectDB();

if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
} else {
    $controller = "";
}

switch ($controller) {
    case 'user':{
            require_once('Controller/user/index.php');
    break;
        }
    case 'blog':{
            require_once('Controller/blog/index.php');
    break;
        }
    default:
    break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  </br><a href="http://localhost/MVC/index.php?controller=user&action=listuser">User List</a></br>
  <a href="http://localhost/MVC/index.php?controller=blog&action=listblog">Blogs</a>
</body>
</html>
