<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/css/bootstrap.min.css"); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url("assets/superadmin/dist/css/formValidation.css"); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url("assets/superadmin/dist/css/AdminLTE.min.css"); ?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url("assets/superadmin/dist/css/skins/_all-skins.min.css"); ?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url("assets/plugins/iCheck/flat/blue.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.css"); ?>">
    <link href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css" rel='stylesheet' type='text/css' />
    <link href="https://cdn.datatables.net/responsive/2.0.2/css/responsive.dataTables.min.css" rel='stylesheet' type='text/css' />
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html"><b>Steelez</b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <div class="alert alert-success alert-dismissible" role="alert" <?php if($this->session->flashdata('message')==''){ ?> style="display:none" <?php } ?> >
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <?php echo $this->session->flashdata('message'); ?>
        </div>
        <div class="alert alert-danger alert-dismissible" role="alert" <?php if($this->session->flashdata('emessage')==''){ ?> style="display:none" <?php } ?> >
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <?php echo $this->session->flashdata('emessage'); ?>
        </div>
        <p class="login-box-msg"><?php echo $title; ?></p>
        <form id="superadminLoginForm" action="<?php echo $action; ?>" method="post">
          <input type="hidden" name="type" value="<?php echo $type; ?>" />
          <div class="form-group has-feedback">
            <input type="email" name="email" class="form-control" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <!--div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div-->
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>
       
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
  <!-- jQuery 2.1.4 -->
  <script src="<?php echo base_url("assets/plugins/jQuery/jQuery-2.1.4.min.js"); ?>"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <script src="<?php echo base_url("assets/superadmin/dist/js/formValidation.js"); ?>"></script>
    <script src="<?php echo base_url("assets/superadmin/dist/js/framework/bootstrap.min.js"); ?>"></script>
    <!-- Bootstrap 3.3.5 -->
  <!--script src="<?php echo base_url("assets/plugins/datatables/jquery.dataTables.min.js"); ?>"></script-->
   
    <script src="<?php echo base_url("assets/bootstrap/js/bootstrap.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/plugins/iCheck/icheck.min.js"); ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url("assets/plugins/fastclick/fastclick.min.js"); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url("assets/superadmin/dist/js/app.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/superadmin/dist/js/demo.js"); ?>"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
    <script src="<?php echo base_url("assets/superadmin/dist/js/custom_validation.js"); ?>"></script>
  <script src="<?php echo base_url("assets/superadmin/dist/js/custom.js"); ?>"></script>
  <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        });
        $(document).ready(function() {
            $('#example1').DataTable({
                "bPaginate": false,
            });
        });
    </script>
  <script src="https://cdn.datatables.net/responsive/2.0.2/js/dataTables.responsive.min.js"></script>
    <!--!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- AdminLTE for demo purposes -->
   <script>
      $(function () {
        $("#example1").DataTable();
      });
      $("#fileUpload").on('change', function () {
 
        if (typeof (FileReader) != "undefined") {

            var image_holder = $("#image-holder");
            image_holder.empty();

            var reader = new FileReader();
            reader.onload = function (e) {
                $("<img />", {
                    "src": e.target.result,
                    "class": "thumb-image",
                    "style": "height:150px;"
                }).appendTo(image_holder);

            }
            image_holder.show();
            reader.readAsDataURL($(this)[0].files[0]);
        } else {
            alert("This browser does not support FileReader.");
        }
    });
    </script>
  </body>
</html>