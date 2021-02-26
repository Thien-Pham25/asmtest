<?php
session_start();

if (isset($_SESSION['username'])) {
  session_destroy();
  header('Location: ./bosssite/bosslogin.php');
} else {
  header('Location: ./bosssite/bosslogin.php');
}
