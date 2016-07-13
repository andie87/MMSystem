
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

	   <!-- <link href="<?php //echo base_url('asset/font-awesome-4.6.3/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css" /> -->
	   
		<link href="<?php echo base_url('asset/ionicons-2.0.1/css/ionicons.min.css')?>" rel="stylesheet" type="text/css" />    

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('asset/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
	
	<!-- Font Awesome -->
	<link href="<?php echo base_url('asset/css/font-awesome.min.css')?>" rel="stylesheet">
	
	<!-- Endless -->
	<link href="<?php echo base_url('asset/css/endless.min.css')?>" rel="stylesheet">

  </head>

  <body>
	<div class="login-wrapper">
		<div class="text-center">
			<h2 class="fadeInUp animation-delay8" style="font-weight:bold">
				<span class="text-success">MOU Management</span> <span style="color:#ccc; text-shadow:0 1px #fff">System</span>
			</h2>
		</div>
		<div class="login-widget animation-delay1">	
			<div class="panel panel-default">
				<div class="panel-heading clearfix">
					<div class="pull-left">
						<i class="fa fa-lock fa-lg"></i> Login
					</div>

					<!-- <div class="pull-right">
						<span style="font-size:11px;">Don't have any account?</span>
						<a class="btn btn-default btn-xs login-link" href="register.html" style="margin-top:-2px;"><i class="fa fa-plus-circle"></i> Sign up</a>
					</div> -->
				</div>
				<div class="panel-body">
					<?php echo form_open('login/loginProcess', array('id'=>'formlogin','method'=>'post'));?>
						<?php if($this->session->flashdata('pesan1')){?>
							<div class="alert alert-warning" role="alert">
								<button type="button" class="close" data-dismiss="alert">x</button>
								<h4>Peringatan</h4>
								<?php echo $this->session->flashdata('pesan1');?>
							</div>
						<?php } else if($this->session->flashdata('pesan2')){?>
							<div class="alert alert-danger" role="alert">
								<button type="button" class="close" data-dismiss="alert">x</button>
								<h4>Ada kesalahan</h4>
								<?php echo $this->session->flashdata('pesan2');?>
							</div>
							<?php } ?>
						<div class="form-group">
							<label class="control-label">Username</label>
							<input type="text" name="username" placeholder="Username" class="form-control input-sm bounceIn animation-delay2" >
						</div>
						<div class="form-group">
							<label class="control-label">Password</label>
							<input type="password" name="password" placeholder="Password" class="form-control input-sm bounceIn animation-delay4">
						</div>
						<!-- <div class="form-group">
							<label class="label-checkbox inline">
								<input type="checkbox" class="regular-checkbox chk-delete" />
								<span class="custom-checkbox info bounceIn animation-delay4"></span>
							</label>
							Remember me		
						</div> -->
		
						<div class="seperator"></div>
						<!-- <div class="form-group">
							Forgot your password?<br/>
							Click <a href="#">here</a> to reset your password
						</div> -->

						<hr/>
							
						<button type="submit" class="btn btn-success btn-sm bounceIn animation-delay5 login-link pull-right"><i class="fa fa-sign-in"></i> Sign in</button>
					
				</div>
			</div><!-- /panel -->
		</div><!-- /login-widget -->
	</div><!-- /login-wrapper -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <!-- Jquery -->
	<script src="<?php echo base_url('asset/js/jquery-1.10.2.min.js')?>"></script>
    
    <!-- Bootstrap -->
    <script src="<?php echo base_url('asset/bootstrap/js/bootstrap.min.js')?>"></script>
   
	<!-- Modernizr -->
	<script src='<?php echo base_url('asset/js/modernizr.min.js')?>'></script>
   
    <!-- Pace -->
	<script src='<?php echo base_url('asset/js/pace.min.js')?>'></script>
   
	<!-- Popup Overlay -->
	<script src='<?php echo base_url('asset/js/jquery.popupoverlay.min.js')?>'></script>
   
    <!-- Slimscroll -->
	<script src='<?php echo base_url('asset/js/jquery.slimscroll.min.js')?>'></script>
   
	<!-- Cookie -->
	<script src='<?php echo base_url('asset/js/jquery.cookie.min.js')?>'></script>

	<!-- Endless -->
	<script src="<?php echo base_url('asset/js/endless/endless.js')?>"></script>
  </body>
</html>
