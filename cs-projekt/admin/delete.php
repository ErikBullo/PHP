<?php
include_once "../functions.php";
$menu = new Menu();
if(isset($_GET['id'])) {
    $delete = $menu->deleteTeamMember($_GET['id']);
    if($delete) {
        header('Location: menu.php');
    } else {
        echo "Error";
    }
} else {
    header('Location: menu.php');
}