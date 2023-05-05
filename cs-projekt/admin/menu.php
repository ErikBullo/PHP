<?php
include_once "../functions.php";
$object = new Menu();
$items = $object->getTeamMembers();
if(isset($_GET['status']) && $_GET['status'] == 2) {
    echo "Uspesny update";
} elseif (isset($_GET['status']) && $_GET['status'] == 3) {
    echo "Neuspesny update";
}
?>
<ul>
    <a href="menu.php">Menu List </a> / <a href="home.php"> Insert menu item</a>
    <?php
    foreach ($items as $item) {
        echo "<li>ID: ". $item['id'] . ", User name: " . $item['name'] . "  " .
            '<a href="delete.php?id='.$item['id'].'">Delete</a> /
             <a href="form_to_update.php?id='.$item['id'].'">Update</a>
            </li>';
    }
    ?>
</ul>