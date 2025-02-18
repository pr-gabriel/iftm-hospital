<?php

$basePath = "http://" . $_SERVER['HTTP_HOST'] . "/../";
$id = isset($_GET['id']) ? $_GET['id'] : '';
header("Location: " . $basePath . "views/agendamento/agendamento.php?id=" . $id);
exit();
