<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href=" <?=base_url('assets/css/main.css'); ?> ">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Vali Admin</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="lockscreen-content">
      <div class="logo">
        <h1>Vali</h1>
      </div>
      <div class="lock-box"><img class="rounded-circle user-image" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg">
        <h4 class="text-center user-name">John Doe</h4>
        <p class="text-center text-muted">Account Locked</p>
        <form class="unlock-form" action="index.html">
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" type="password" placeholder="Password" autofocus>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-unlock fa-lg"></i>UNLOCK </button>
          </div>
        </form>
        <p><a href="page-login.html">Not John ? Login Here.</a></p>
      </div>
    </section>
  </body>
  <!-- Essential javascripts for application to work-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?= base_url('assets/js/plugins/pace.min.js') ?>"></script>
</html>