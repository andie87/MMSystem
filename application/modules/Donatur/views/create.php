<div class="main-header clearfix">
    <div class="page-title">
        <h3 class="no-margin"><?php echo $page;?></h3>
    </div><!-- /page-title --> 
</div><!-- /main-header -->

<div class="padding-md">
	<div class="panel panel-default">
		<div class="panel-heading">
			Form tambah donatur
		</div>
		<div class="panel-body">
			<?php echo form_open('donatur/prosesCreate', array('class'=>'form-horizontal','method'=>'post'));?>
				<div class="form-group">
					<label class="col-sm-2 control-label">Nama Donatur</label>
					<div class="col-lg-5">
						<input type="text" name="nama" class="form-control input-sm" placeholder="Nama Donatur">
					</div><!-- /.col -->
				</div><!-- /form-group -->
				<div class="form-group">
					<label class="col-sm-2 control-label">Negara Asal</label>
					<div class="col-lg-5">
						<input type="text" name="negara" class="form-control input-sm" placeholder="Negara Asal">
					</div><!-- /.col -->
				</div><!-- /form-group -->
				<div class="form-group">
					<label  class="col-md-2 control-label">Alamat</label>
					<div class="col-lg-5">
						<textarea class="form-control" name="alamat" rows="3"></textarea>
					</div><!-- /.col -->
				</div><!-- /form-group -->
				<div class="form-group">
					<label  class="col-md-2 control-label">No Kontak</label>
					<div class="col-lg-5">
						<input type="text" name="kontak" class="form-control input-sm" placeholder="Kontak">
					</div><!-- /.col -->
				</div><!-- /form-group -->
				<div class="form-group">
					<label  class="col-md-2 control-label">Email</label>
					<div class="col-lg-5">
						<input type="email" name="email" class="form-control input-sm" placeholder="Email">
					</div><!-- /.col -->
				</div><!-- /form-group -->
				<div class="form-group">
					<label class="col-md-2 control-label">Nama PIC</label>
					<div class="col-lg-5">
						<input type="text" name="pic" class="form-control input-sm" placeholder="Nama PIC">
					</div><!-- /.col -->
				</div><!-- /form-group -->
				<div class="form-group">
					<div class="col-lg-offset-2 col-lg-5">
						<button type="submit" class="btn btn-success btn-sm">Tambah</button>
					</div><!-- /.col -->
				</div><!-- /form-group -->			
		</div>
	</div>
</div>