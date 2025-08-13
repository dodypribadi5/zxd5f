<?php
date_default_timezone_set('Asia/Jakarta');
$waktuBatas = strtotime('2025-08-22 23:59:59');

if (time() > $waktuBatas) {
  header('Location: https://expiredweb.pages.dev');
  exit;
}
?>