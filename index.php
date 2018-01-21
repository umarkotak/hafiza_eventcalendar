<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Event Calendar</title>

  <link rel="stylesheet" type="text/css" href="style/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="style/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style/css/eventCalendar.css">
  <link rel="stylesheet" type="text/css" href="style/css/eventCalendar_theme_responsive.css">
  <link rel="stylesheet" type="text/css" href="style/css/bootstrap-datetimepicker.css">

  <script type="text/javascript" src="style/js/jquery.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>


</head>
<body>

<div class="row">
  <div class="col-md-2">

  </div>

  <div class="col-md-8">
    <?php include "header.php"; ?>
    <?php include "navbar.php"; ?>
    <div class="container-fluid" style="margin: -15px 5px 5px; border: 1px solid #88d8c0; border-radius: 5px;">
      <?php include "konten.php"; ?>
    </div>

    <?php include "footer.php"; ?>
  </div>

  <div class="col-md-2">

  </div>
</div>
</body>
</html>