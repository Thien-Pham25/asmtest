<?php
session_start();

if (isset($_SESSION['username'])) {
  session_destroy();
  header('Location: ./bosslogin.php');
} else {
  header('Location: ./bosslogin.php');
}
