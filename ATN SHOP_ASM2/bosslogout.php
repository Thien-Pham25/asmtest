<?php
session_start();

if (isset($_SESSION['username'])) {
  session_destroy();
  header('Location: ./bossindex.php');
} else {
  header('Location: ./bossindex.php');
}
