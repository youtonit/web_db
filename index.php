<html>
    <form action="index.php">
    <input type='text' name="name">
    <input type='text' name="mail">
    <input type='text' name="age">
    <input type='submit' name="button">
    </form>
</html>

<?php

// query data
$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

// open mysql
$sql = new mysqli('localhost', 'YOUR USER', 'YOUR PASSWORD', 'YOUR DB');

$info = "INSERT INTO YOUR TABLE (name, email, age) VALUES ('{$name}','{$mail}','{$age}');";
if ($sql == TRUE) {
    echo 'connected';
}; if ($sql->connect_error) {
    echo 'no';
}
mysqli_query($sql, $info); // inset data to mysql

mysqli_close($sql); // close mysql
?>
