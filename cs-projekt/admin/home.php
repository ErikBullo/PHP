<?php
include_once "../functions.php";
$items = new Menu();
if (isset($_POST['submit'])) {
    $insert = $items->insertMember($_POST['name'], $_POST['position'], $_POST['text'], $_POST['image']);
    if ($insert) {
        header('Location: home.php?status=1');
    } else {
        echo 'Unable to insert values';
    }
} else {
    if(isset($_GET['status']) && $_GET['status'] == 1) {
        echo 'Pridane';
    }
    ?>
    <a href="menu.php">Menu List </a> / <a href="home.php"> Insert menu item</a>
    <form action="home.php" method="post">
        Position:<br>
        <input type="text" name="position" placeholder="Position" value=""><br>
        Name:<br>
        <input type="text" name="name" placeholder="Name" value=""><br>
        Text:<br>
        <input type="text" name="text" placeholder="Text" value=""><br>
        Image:<br>
        <input type="text" name="image" placeholder="Image" value=""><br>
        <input type="submit" name="submit" value="Vlozit">
    </form>
    <?php
}
?>