<style>
    td, th {
        text-align: center;
    }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <small><a href="<?= site_url()?>customer/">Customer</a>
                <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                View Customer
            </small>
        </h1>
        
    </section>
    <!-- Main content -->
	<?php//print_r($result);die(); ?>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <?php //$this->load->view('include/alert'); ?>
                        <h3 class="box-title">View Assets</h3>
                        <div style="float: right;">
                            <a href="<?=  site_url();?>assets/assetsadd" class="btn btn-primary">Make New Asset</a>
                        </div>
                   <!--- <a href="<?= site_url() ?>customer/customeradd" type="button"
                           class="btn btn-success pull-right"><i class="glyphicon glyphicon-plus"></i>&nbsp;&nbsp;&nbsp;Add&nbsp;&nbsp;Customer</a>---->
                   </div>
                    <?php// print_r($result);die();?>
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                
                                <th>S.no</th>
                                <th>Assets Amount</th>
                                <th colspan="2">Actions</th>
                                <th>Date</th>
                            </tr>
                            </thead>
                            <tbody>
							
                            <?php
                             foreach($result as $row)
                                { ?>
                            <tr>
                            <td><?=$row['asset_id'];?></td>
                            <td><?=$row['asset_amount']?></td>
                            <td><a href="<?=site_url()?>assets/assets_update/<?=$row['asset_id']?>" class="btn btn-success">Update</a></td>
                            <td>
                                <a href="<?=site_url()?>assets/assets_delete/<?=$row['asset_id']?>" class="btn btn-danger">Delete</a>
                            </td>
                            <td><?=$row['asset_dateadded']?></td>
                            </tr>
                            <?php } ?>
                             </tbody>
							 
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.box -->
        </div>

    </section>
</div>

