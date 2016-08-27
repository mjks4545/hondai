<style>
    td, th {
        text-align: center;
    }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <small><a href="<?= site_url()?>member/">Member</a>
                <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                View Member
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
                        <h3 class="box-title">View Member</h3>
                        <a href="<?= site_url() ?>member/memberadd" type="button"
                           class="btn btn-success pull-right"><i class="glyphicon glyphicon-plus"></i>&nbsp;&nbsp;&nbsp;Add&nbsp;&nbsp;Member</a>

                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>S.no</th>
                                <th>Member Name</th>
                                <th>Member Number</th>
                                <th>Member Role</th>
                                <th>Member Status</th>
                                <th>Member city</th>
                                <th>Member country</th>
                                <th>Member Street Address</th>
                                <th>Member Month</th>
                                <th>Member Year</th>
                                <th>Member Dateadded</th>
                            <th class="text-center" colspan="2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
							<?php foreach($result as $row) { ?>
                                <tr>
								<td><?=$row->m_id;?></td>
								<td><?=$row->m_name;?></td>
								<td><?=$row->m_number?></td>
								<td><?=$row->m_role?></td>
								<td><?=$row->m_status?></td>
								<td><?=$row->m_city?></td>
								<td><?=$row->m_country?></td>
								<td><?=$row->m_streetaddress?></td>
								<td><?=$row->m_month?></td>
								<td><?=$row->m_year;?></td>
								<td><?=$row->date_added;?></td>
								<td><a href="<?=site_url()?>member/memberupdate/<?=$row->m_id;?>" class="btn btn-success">Update</a>
                                </td>
                                <td>
								<a href="<?=site_url()?>member/deletemember/<?=$row->m_id;?>" class="btn btn-danger">Delete</a>
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

