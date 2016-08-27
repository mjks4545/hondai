<style>
    td, th {
        text-align: center;
    }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <small><a href="<?= site_url()?>member/">Customer</a>
                <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                View Customer
            </small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <?php //$this->load->view('include/alert'); ?>
                        <h3 class="box-title">View Customer</h3>
                       <!---- <a href="<?= site_url() ?>member/memberadd" type="button"
                           class="btn btn-success pull-right"><i class="glyphicon glyphicon-plus"></i>&nbsp;&nbsp;&nbsp;Add&nbsp;&nbsp;Member</a>-->
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                           <tr>
                                <th>S.no</th>
                                <th>Customer Name</th>
                                <th>Customer Number</th>
                                <th>Customer Role</th>
                                <th>Customer Status</th>
                                <th>City</th>
                                <th>Country</th>
                                <th>Street Address</th>
                                <th>Customer Type</th>
                                <th class="text-center" colspan="2">Actions</th>
                                <th>Date</th>
                            </tr>
                            </thead>
                            <tbody>
							<?php foreach($result as $row) { ?>
                                <tr>
                                <td><?=$row->cu_id;?></td>
								<td><?=$row->cu_name;?></td>
								<td><?=$row->cu_number;?></td>
								<td><?=$row->cu_role?></td>
								<td><?=$row->cu_status?></td>
								<td><?=$row->cu_city?></td>
								<td><?=$row->cu_country?></td>
								<td><?=$row->cu_street_adress?></td>
								<td><?=$row->c_type?></td>
								<td>
								<a href="<?=site_url()?>customer/customerupdate/<?=$row->cu_id;?>" class="btn btn-success">Update</a>
                                </td>
                                <td>
								<a href="<?=site_url()?>customer/deletecustomer/<?=$row->cu_id;?>" class="btn btn-danger">Delete</a>
								</td>
                                <td><?=$row->cu_dateadded;?></td>
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

