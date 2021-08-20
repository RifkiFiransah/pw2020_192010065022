<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// Jika tidak ada id di url
if (!isset($_GET['id'])) {
  header('Location: index.php');
  exit;
}

// Ambil id dari url
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
          alert('Data Berhasil Di Hapus');
          document.location.href = 'index.php';
        </script>";
} else {
  echo "Data Gagal Dihapus";
}
