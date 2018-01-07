<?php
include('koneksi.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login Pegawai - Sistem Cuti Online</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="materialize/css/materialize.css" type="text/css">
    <link rel="stylesheet" href="plugins/materialicon/icon.css">
    <script src="plugins/jquery/jquery-1.12.0.js"></script>
    <script src="materialize/js/materialize.js"></script>
    <style type="text/css">
    html,
    body {
    height: 100%;
    }
    html {
    display: table;
    margin: auto;
    }
    body {
    display: table-cell;
    vertical-align: middle;
    }
    .margin {
    margin: 0 !important;
    }
    </style>
  </head>
  <body>
  <body class="red">
    <div class="art-content-layout">
          <div class="art-layout-cell" style="width: 33.33%" >
            <p style="float: right;margin: 0px"><a href="admin/index.php"><img width="150" height="150" alt="" src="images/admin.png" class=""></p></a>
            <h5 style="float: center">ADMIN</h5>
            
            <p style="float: right;margin: 20px"><a href="admin/index.php"><img width="150" height="150" alt="" src="images/admin.png" class=""></p></a>
            <h5 style="float: right">ADMIN</h5>

            <p style="text-align: left;margin: 20px"><a href="logpegawai.php"><img width="150" height="150" alt="" src="images/karyawan.png" class=""></p></a>
            <h5 align="left">Karyawan</h5>
          </div>
        </div>
        <div class="row margin">
          <div class="art-layout-cell" style="width: 33.33%" >
            <p style="text-align: center;margin: 0px"><a href="hrd/index.php"><img width="150" height="150" alt="" src="images/hrd.png" class=""></p></a>
            <h5 align="center">HRD</h5>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <p class="margin medium-small center">Copyright 2017</p>
          </div>
        </div>
    </div>
</body>
</html>
