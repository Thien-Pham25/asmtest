<?php
session_start();

if (isset($_SESSION['username'])) {
  session_destroy();
  header('Location: ./bosssite/bossindex.php');
} else {
  header('Location: ./bosssite/bossindex.php');
}
