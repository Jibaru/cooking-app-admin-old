<?php
session_start();

$_SESSION['user'] = "Logged";

header('Location:/');