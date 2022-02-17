<?php
require "vendor/autoload.php";
use App\controller\NoteController;
use App\controller\TypeController;
use App\model\NoteModel;
use App\model\TypeModel;

$noteController = new NoteController();
$typeController = new TypeController();
$page = $_GET['page']?? '';
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
<a href="index.php?page=note-list">Note List</a><br>
<a href="index.php?page=type-list">Type</a><br>
<?php
switch ($page) {
    case "note-list":
        $noteController->getAllNote();
        break;
    case "note-detail":
        $id=$_GET["id"];
        $noteController->getNoteById($id);
        break;
    case "note-create":
        $noteController->createNote();
        break;
    case "note-delete":
        $noteController->delete($_GET["id"]);
        break;
    case "note-update":
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $noteController->edit();
        } else {
            $noteController->update();
        }
        break;




    case "type-list":
        $typeController->getAllType();
        break;
    case "type-detail":
        $id=$_GET["id"];
        $typeController->getTypeById($id);
        break;
    case "type-create":
        $typeController->createType();
        break;
    case "type-delete":
        $typeController->delete($_GET["id"]);
        break;
    case "type-update":
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $typeController->edit();
        } else {
            $typeController->update();
        }
        break;
}
        ?>
</body>
</html>
