<nav class="navbar navbar-default" style="background-color: #b2e6d6;">
  <ul class="nav navbar-nav">

    <?php

      // session_start();
      // if (isset($_SESSION['username'])) {
      //   if($_SESSION['status'] == 'admin'){
      //     $user = $_SESSION['username'];
      //     $title = $_SESSION['status'];
          // echo"<li><a href='?page=home'>HOME</a></li>";
          // echo"<li><a href='?page=login'>LOGIN</a></li>";
          // echo"<li><a href='?page=logout'>LOGOUT</a></li>";
          // <!-- <li><a href="?page=login">Login</a></li> -->

          // <!-- login -->
          // echo"<li><a href='?page=master'>MASTER</a></li>";
          // echo"<li><a href='?page=kegiatan'>TAMBAH KEGIATAN</a></li>";
          // echo"<li><a href='?page=admin'>TAMBAH ADMIN</a></li>";
          // echo"<li><a href='?page=ruangan'>RUANGAN</a></li>";
      //   }
      // }else{

          // echo"<li><a href='?page=home'>HOME</a></li>";
          // echo"<li><a href='?page=login'>LOGIN</a></li>";

      // }




    ?>
    <!-- <li><a href="?page=login">Login</a></li> -->

    <!-- login -->
    <!-- <li><a href="?page=master">MASTER</a></li>
    <li><a href="?page=kegiatan">TAMBAH KEGIATAN</a></li>
    <li><a href="?page=admin">TAMBAH ADMIN</a></li>
    <li><a href="?page=ruangan">RUANGAN</a></li> -->

    <li><a href='?page=home'>HOME</a></li>
    <?php if (isset($_SESSION['username'])): ?>

      <?php if ($_SESSION['status'] == 'admin'): ?>
        <li><a href="?page=kegiatan">TAMBAH KEGIATAN</a></li>
        <li><a href="?page=admin">TAMBAH ADMIN</a></li>
        <li><a href="?page=ruangan">RUANGAN</a></li>
        <li><a href='?page=master'>MASTER</a></li>
        
      <?php elseif ($_SESSION['status'] == 'op'): ?>
        <li><a href="?page=kegiatan">TAMBAH KEGIATAN</a></li>

      <?php endif ?>

      <li><a href="#"><?php echo strtoupper("Hello, ".$_SESSION['username']);  ?></a></li>
      <li><a href='?page=logout'>LOGOUT</a></li>
    <?php else: ?>
      <li><a href="?page=login">LOGIN</a></li>
    <?php endif ?>
  </ul>
</nav>