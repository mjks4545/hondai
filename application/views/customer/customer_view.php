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
                        <h3 class="box-title">View Customer</h3>
                        <div style="float: right;"> 
                            <a href="<?=  site_url('customer/make_new_customer/'.$this->uri->segment(3));?>" class="btn btn-primary">Make New Customer</a>
                        </div>
                   <!--- <a href="<?= site_url() ?>customer/customeradd" type="button"
                           class="btn btn-success pull-right"><i class="glyphicon glyphicon-plus"></i>&nbsp;&nbsp;&nbsp;Add&nbsp;&nbsp;Customer</a>---->
                   </div>
                   <form action="<?=site_url()?>customer/customer_search" method="post">
                    <div class="row pull-right">
                        <div class="col-sm-7">
                            <input type="text" name="c_code" class="form-control">

                        </div>
                        <div class="col-sm-1">
                            <button type="submit" name="submit" class="btn btn-primary">Search</button>
                        </div>


                    </div>
                    </form>
                    
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                
                                <th>S.no</th>
                                <th>H.No</th>
                                <th>Sender Name</th>
                                <th>Receiver Name</th>
                                <th>Sender Branch</th>
                                <th>Receiver Branch</th>
                                <!--<th>Currency Symbol</th>-->
                                <th>Officer Name</th>
                                <th>Current Branch</th>
                                <th>Status</th>
                                <th>Transaction</th>
                                <th>Amount</th>
                                <th>Rate</th>
                                <th>Total</th>
			                    <th>Date</th>
                            </tr>
                            </thead>
                            <tbody>
							<?php 
                            $i = 0; 
                            $total_of_total = 0;
                            foreach($result as $row) {
                             $total_amount = $row['cash'][$i]->c_amount * $row['cash'][$i]->c_rate;
                             ?> 
							<?php 
                            
                                //echo '<pre>';
                                //print_r($row);die();
                            
                            ?>
							<tr>
							<td><?=$row['sender'][0]->cu_id;?></td>
							<td><?=$row['cash'][$i]->c_code;?></td>
							<td><?=$row['sender'][0]->cu_name;?></td>
							<td><?=$row['receiver'][0]->cu_name;?> </td>
							<td><?=$row['sender'][0]->cu_country;?></td>
							<td><?=$row['receiver'][0]->cu_country;?></td>
							<td><?=$row['member'][0]->m_name;?></td>
							<td><?=$row['branch'][0]->b_name;?></td>
							<td>
                            <?php 
                            if($row['cash'][$i]->c_status ==1 )
                            {?>
							    <a href="<?=site_url()?>customer/customerview/<?=$row['cash'][$i]->c_id?>/<?=$this->uri->segment(3)?>"/ class="btn btn-success">Unpaid</a>
							<?php }else{?>
                                <a href="<?=site_url()?>customer/customerview/<?=$row['cash'][$i]->c_id?>"/ class="btn btn-danger">paid</a>
                                <?php }?>                                
                            </td>
                            <td><?php $check=$row['cash'][$i]->c_transaction; if($check==1){?><a href="javascript:void(0);" class="btn btn-success">Credit</a>
                            <?php } else echo "<a href='#' class='btn btn-danger'>Debit</a>"; ?>
                            </td>
                            <td> <!--<?//=$row['cash'][$i]->c_symbol;;?> -->   &nbsp; <?=$row['cash'][$i]->c_amount;?></td>
                            <td><?=$row['cash'][$i]->c_rate;?></td>
                            <td><?=$total_amount;?></td>
							<td>  
							    <?=$row['cash'][$i]->c_dateadded;
                                $total_of_total = $total_of_total+$total_amount;
                                ?>

							</td>
							</tr>
							<?php  $i++; }  ?>
                             </tbody>
                             <tr>
                                 <td colspan="12"></td>
                                 <td><?=$total_of_total?></td>  
                                  <td></td>  
                             </tr>
							 
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

