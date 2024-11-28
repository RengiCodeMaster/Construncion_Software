<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/etc/config.php ';
require_once $_SERVER["DOCUMENT_ROOT"] . '/models/connect/conexion.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/views/vistaDashboard.php';


if (!isset($_SESSION["txtusername"])) {
    header('Location: ' . get_UrlBase('index.php'));
    exit();
}
vistaDashboard();
