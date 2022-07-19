<?php

require 'controllers/MessageController.php';

$controller  = new MessageController;

$subject = $_POST['subject'];
$content = $_POST['content'];

$controller->sendNewMessageByUserId(1, $subject, $content);

header("Location: Home.php");

?>