<?php
require '../../App/config/baseUrl.php';
session_start();
unset($_SESSION['name']);

header('location:'.baseUrl('auth/login.php'));
