<?php
require_once 'SIM.php';

$name = $_POST['name'];
$address = $_POST['address'];
$birthPlace = $_POST['birthPlace'];
$birthDate = $_POST['birthDate'];
$sex = $_POST['sex'];
$height = $_POST['height'];
$work = $_POST['work'];
$simType = $_POST['simType'];

$SIM = new SIM(
    $name,
    $address,
    $birthPlace,
    $birthDate,
    $sex,
    $height,
    $work,
    $simType
);

$SIM->printSIM();