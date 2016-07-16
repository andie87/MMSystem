<div class="main-header clearfix">
    <div class="page-title">
        <h3 class="no-margin"><?php echo $page;?></h3>
    </div><!-- /page-title --> 
</div><!-- /main-header -->

<div class="padding-md">
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">
            <a class="btn btn-sm btn-success" href="<?php echo site_url('donatur/create'); ?>"><i class="fa fa-plus fa-lg"></i> Tambah Donatur</a>
            <span class="label label-info pull-right"><?php echo $donaturs->num_rows();?>  Donatur</span>
        </div>
        <div class="padding-md clearfix">
            <table class="table table-striped" id="dataTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Donatur</th>
                        <th>Negara Asal</th>
                        <th>Alamat</th>
                        <th>No Kontak</th>
                        <th>Email</th>
                        <th>Nama PIC</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                     $i = 1;   
                     foreach ($donaturs->result() as $donatur) {
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $donatur->nama_donatur; ?></td>
                        <td><?php echo $donatur->asal_negara; ?></td>
                        <td><?php echo $donatur->alamat; ?></td>
                        <td><?php echo $donatur->no_kontak; ?></td>
                        <td><?php echo $donatur->email; ?></td>
                        <td><?php echo $donatur->nama_pic; ?></td>
                        <td><i class="fa fa-edit fa-lg"></i></td>
                    </tr>
                    <?php $i++; }?>
                </tbody>
            </table>
        </div><!-- /.padding-md -->
    </div><!-- /panel -->
</div><!-- /.padding-md -->