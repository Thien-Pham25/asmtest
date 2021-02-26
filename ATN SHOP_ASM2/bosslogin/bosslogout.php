<?php
session_start();
if (isset($_SESSION['username'])) {
  session_destroy();
  header('Location: ./bosslogout/index.php');
} else {
  header('Location: ./bosslogout/index.php');
}
