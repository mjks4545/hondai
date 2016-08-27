<style>
    td, th {
        text-align: center;
    }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <small><a href="<?= site_url()?>branch/">Branch</a>
                <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                View Branch
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
                        <h3 class="box-title">View Branch</h3>
                        <a href="<?= site_url() ?>branch/branchadd" type="button"
                           class="btn btn-success pull-right"><i class="glyphicon glyphicon-plus"></i>&nbsp;&nbsp;&nbsp;Add&nbsp;&nbsp;Branch</a>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>S.no</th>
                                <th>Sender Branch</th>
                                <th>Receiver Branch</th>
                                <th>Branch Location</th>
                                <th>Branch Current Amount</th>
				                <th>Branch Status</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
							<?php foreach($result['branch'] as $row) { ?>
                                <tr>
								<td><?=$row->b_id;?></td>
								<td><?=$row->b_name;?></td>
                                <td><?=$row->b_name;?></td>
								<td><?=$row->b_city?> , <?=$row->b_country?></td>
								<td>
								<?php
								    $addition = '';
								    foreach( $result['cash'] as $cash ){
									//$row->b_id . $cash->r_b_id . ' ';
									if( $row->b_id == $cash->r_b_id ){
									    $addition += $cash->c_amount;
									} 
								    }
								    echo $addition;
								?>
								</td>
								<td>
                                <?php if($row->b_status == 1){?>
                                    <a href="" class="btn btn-success">Active</a>
                                    <?php } else {?>

                                    <a href="" class="btn btn-danger">DeActive</a>
                                          <?php } ?>
                                </td>
                                <td>
                                    <a href="<?=site_url()?>customer/customer_view/<?=$row->b_id?>" class="btn btn-primary">View</a>
                                </td>
								
				
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

