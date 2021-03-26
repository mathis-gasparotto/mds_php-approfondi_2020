<?php
if (!isset($_SESSION['connected'])) {
  header("Location: login.php");
}
