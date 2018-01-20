<?php
  if (isset($_GET['page'])) {
    if ($_GET['page'] == 'home')  { include "home.php"; }
    // if ($_GET['page'] == 'login') { include "login.php"; }
    if ($_GET['page'] == 'kegiatan') { include "kegiatan.php"; }
    if ($_GET['page'] == 'admin') { include "admin.php"; }
    // if ($_GET['page'] == 'admin') { include "admin.php"; }
    if ($_GET['page'] == 'ruangan') { include "tambah_ruangan.php"; }
    if ($_GET['page'] == 'login') { include "login.php"; }
    if ($_GET['page'] == 'logout') { include "act_logout.php"; }
    // if ($_GET['page'] == 'login') { include "login.php"; }

  } else {
    include "home.php";
  }
?>