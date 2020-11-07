<?php 

/* Grupo y Página para navegar */
$group = isset($_GET['group']) ? strtolower($_GET['group']) : "";
$page = isset($_GET['page']) ? strtolower($_GET['page']) : "home";

/* Session */
session_start();

$is_logged = isset($_SESSION['user']);

/* Header */
require_once('./partials/header.php');

if (!$is_logged) {
    require_once('./pages/login.php');
} else {
    /* Navbar */
    require_once('./partials/navbar.php');

    /* Sidebar Menu */
    require_once('./partials/menu.php');

    /* Main */
    require_once('./partials/main.php');
}

/* Footer */
require_once('./partials/footer.php');