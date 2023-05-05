<?php
include_once "../functions.php";
if(isset($_POST['submit'])) {
    $items = new Menu();
    $update = $items->updateTeam(
        $_POST['id'],
        $_POST['name'],
        $_POST['position'],
        $_POST['text'],
        $_POST['image']
    );
    if($update) {
        header('Location: menu.php?status=2');
    } else {
        header('Location: menu.php?status=3');
    }
} else {
    header('Location: menu.php');
}