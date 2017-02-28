<?php
    session_start();
if(!empty($_POST['Go'])) {
    $_SESSION['name'] = trim(strip_tags($_POST['name']));
    $_SESSION['text'] = trim(strip_tags($_POST['text']));
    $_SESSION['date'] = $_POST['date'];
    header("Location: index.php");
    exit;
};
?>