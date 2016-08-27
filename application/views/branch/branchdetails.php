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
                View Branch Details
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
                        <h3 class="box-title">Bbranch Details</h3>

                    </div>
                    
                    <!-- /.box-header -->
                     <?php 
                     foreach($result as $row) { ?>
                    <div class="box-body">
                    <div class="row detail"><h1 style="margin-left:230px;">Branch Details</h1></div>
                    <div class="col-sm-12"><hr></div>
                        <div class=" col-sm-10 col-xs-10 col-sm-offset-1">
                            <div class="col-sm-5">
                                <h3><label>H.no:</label> <?=$row['cash'][$i]->c_code;?></h3>
                            </div>
                            <div class="col-sm-5">
                               <h3> <label>Date:</label>  <?=$row['cash'][$i]->c_dateadded;?></h3>  
                            </div>
                        </div>
                        <div class=" col-sm-10 col-xs-10 col-sm-offset-1">
                            <div class="col-sm-5">
                               <h3> <label>Sender Name:  </label>  <?=$row['sender'][0]->cu_name;?></h3>
                            </div>
                            <div class="col-sm-5">
                                <h3><label>Reciever Name:</label> <?=$row['receiver'][0]->cu_name;?></h3>
                            </div>
                        </div>
                        <div class=" col-sm-10 col-xs-10 col-sm-offset-1">
                            <div class="col-sm-5">
                              <h3><label>From Country</label>:  <?=$row['sender'][0]->cu_country;?></h3>
                            </div>
                            <div class="col-sm-5">
                              <h3>  <label>To Country:</label>  <?=$row['receiver'][0]->cu_country;?></h3>
                            </div>
                        </div>
                        <div class=" col-sm-10 col-xs-10 col-sm-offset-1">
                            <div class="col-sm-5">
                               <h3> <label>Amount:</label>   <?=$row['cash'][$i]->c_symbol;?><?=$row['cash'][$i]->c_amount;?></h3>
                            </div>
                            <div class="col-sm-5">
                             <h3>   <label>Officer Name:</label>   <?=$row['member'][0]->m_name;?></h4>
                            </div>
                        </div>
                        <div class=" col-sm-10 col-xs-10 col-sm-offset-1">
                            <div class="col-sm-5">
                              <h3><label>Branch:</label>  <?=$row['branch'][0]->b_name;?></h3>
                            </div>
                            <div class="col-sm-5">
                               <h3> <label>Rate:</label>  <?=$row['cash'][$i]->c_rate;?></h3>
                            </div>
                        </div>
                         <div class="col-sm-12 col-xs-12">
                            <div class="col-sm-12">
                               <hr>
                            </div>
                        </div>
                        
                    <div class="col-sm-4 col-sm-offset-4">
                    <?php 
                    if($row['cash'][$i]->c_status==1){
                    ?>
                        <a href="<?=site_url()?>cash/cash_pay/<?=$row['cash'][$i]->c_id;?>" class="btn btn-primary">Pay Customer</a>
                        <?php }

                         else { ?>
                                 <!---<p>Already paid</p>-->
                                 
                         <?php } ?>
                            
                    </div>
                    <?php } ?>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.box -->
        </div>

    </section>
</div>

