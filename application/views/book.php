<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Entour</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url()."assets"?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()."assets"?>/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url()."assets"?>/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()."assets"?>/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url()."assets"?>/dist/css/skins/_all-skins.min.css">
  <!-- css custom -->
  <link rel="stylesheet" href="<?=base_url()."assets"?>/css/custom.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="" class="navbar-brand">
            <b>Logo Entour</b>
          </a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Bantuan</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Foto Profil <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Profil</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Keluar</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper background">
    <div class="container-fluid">

      <section class="content">
        <div class="row">

          <div class="col-md-12">
            <form action="<?=base_url().'upload/file_data';?>" method="post" class="form-horizontal" enctype="multipart/form-data">
              <div class="form-group">
                <label class="col-sm-3 control-label">Asal</label>

                <div class="input-group col-xs-12 col-sm-6">
                  <input type="text" name="asal" class="form-control" value="<?= set_value('asal'); ?>"   placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-3 control-label">Tujuan</label>

                <div class="input-group col-xs-12 col-sm-6">
                  <input type="text" name="tujuan" class="form-control" value="<?= set_value('tujuan'); ?>"  placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-3 control-label">Tanggal Pulang</label>

                <div class="input-group col-xs-12 col-sm-6 date">
                  <input type="text" name="tanggalpulang" class="form-control" value="<?= set_value('tanggalpulang'); ?>"  data-toggle="datepicker" id="datepicker">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-3 control-label">Durasi Penyewaan</label>
                <div class="input-group col-xs-12 col-sm-6">
                  <input type="text" name="durasi" class="form-control" value="<?= set_value('durasi'); ?>">
                  <span class="input-group-addon">Hari</span>
                </div>
              </div>

              <div class="col-sm-offset-5 col-xs-offset-4">
                <a href="<?=base_url();?>/home" class="btn btn-success">Cancel</a>
                <button type="submit" class="btn btn-primary">Finish</button>
              </div>
            </form>

          </div>
        </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
      </div>
      <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?=base_url()."assets"?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url()."assets"?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?=base_url()."assets"?>/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url()."assets"?>/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()."assets"?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()."assets"?>/dist/js/demo.js"></script>

<!-- bootstrap datepicker -->
<script src=" <?php echo base_url(). "assets" ?> /bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script>
  $(function () {
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })
  })
</script>

</body>
</html>
