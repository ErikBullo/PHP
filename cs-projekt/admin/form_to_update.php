<?php
include_once "../functions.php";
$menu = new Menu();
$team = $menu->getTeamMember($_GET['id']);
?>
<a href="menu.php">Menu List </a> / <a href="home.php"> Insert menu item</a>
<form action="update.php" method="post">
    Name:<br>
    <input type="text" name="name" placeholder="name" value="<?php echo $team['name']; ?>"><br>
    Position:<br>
    <input type="text" name="position" placeholder="position" value="<?php echo $team['position']; ?>"><br>
    Text:<br>
    <input type="text" name="text" placeholder="text" value="<?php echo $team['text']; ?>"><br>
    Image:<br>
    <input type="text" name="image" placeholder="image" value="<?php echo $team['image']; ?>"><br>
    <input type="hidden" name="id" value="<?php echo $team['id']; ?>">
    <input type="submit" name="submit" value="Update">
</form>