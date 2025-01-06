<?php
session_start();

unset($_SESSION['nama']);
unset($_SESSION['username']);
unset($_SESSION['peran']);

header("Location: login.php");